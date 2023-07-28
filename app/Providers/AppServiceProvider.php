<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Elasticsearch\ClientBuilder as ESClientBuilder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('es', function () {
            // 从配置文件读取 Elasticsearch 服务器列表
            $builder = ESClientBuilder::create()->setHosts(config('database.elasticsearch.hosts'));
            // 如果是开发环境
            if (app()->environment() === 'local') {
                // 配置日志，Elasticsearch 的请求和返回数据将打印到日志文件中，方便我们调试
                $builder->setLogger(app('log')->driver());
            }

            return $builder->build();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $domain = $_SERVER['HTTP_HOST'] ?? '';
        if ($domain) {
            $infos = explode('.', $domain);
            $baseDomain = array_pop($infos);
            $baseDomain = array_pop($infos);
            $icpStr = config('app.icp' . $baseDomain);
            View::share('currentIcp', $icpStr);
            View::share('currentDomain', "http://{$domain}");
        }
        //
        View::share('commonAssetUrl', config('app.domains.assetUrl'));
        \ModulePassport\Models\AttachmentPath::observe(\ModulePassport\Observers\AttachmentPathObserver::class);
        \ModulePassport\Models\Attachment::observe(\ModulePassport\Observers\AttachmentObserver::class);
        \ModulePassport\Models\Resource::observe(\ModulePassport\Observers\ResourceObserver::class);
        \ModulePassport\Models\Permission::observe(\ModulePassport\Observers\PermissionObserver::class);

        \Validator::extend('mobile', 'Framework\Baseapp\Rules\Mobile@passes');
        \Validator::replacer('mobile', function($message, $attribute, $rule, $parameters) {
            return 'The ' . $attribute . ' must be mobile.';
        });
    }
}
