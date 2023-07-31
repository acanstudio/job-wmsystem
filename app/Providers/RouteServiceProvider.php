<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();
        $this->mapApiRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('')
            ->middleware('api')
            //->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapWebRoutes()
    {
		/*if (!app()->runningInConsole()) {
            $siteCode = explode('.', $_SERVER['HTTP_HOST'])[0];
            $siteCode = explode('-', $siteCode)[0];
            $siteCode = in_array($siteCode, ['brand', 'subject']) ? 'guide' : $siteCode;
            //var_dump($siteCode);
            if (in_array($siteCode, ['pet', 'culture', 'guide', 'human', 'topic'])) {
		        $namespace = 'App\Http\Controllers\\' . ucfirst($siteCode);
                Route::namespace($namespace)->group(base_path("routes/{$siteCode}.php"));
			    return ;
            }
        }*/
        Route::prefix('')->namespace($this->namespace)->group(base_path('routes/web.php'));
        //Route::prefix('')->namespace($this->namespace . '\Web')->group(base_path('routes/web.php'));
    }
}
