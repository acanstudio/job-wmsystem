<?php

namespace App\Providers;

use App\Models\Media;
use App\Observers\CommentObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        //Media::observe(MediaObserver::class);
    }
}
