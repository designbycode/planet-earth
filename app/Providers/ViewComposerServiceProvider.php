<?php

namespace App\Providers;

use App\Composers\NavigationComposer;
use App\Composers\UpcomingEventComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(NavigationComposer::class);
        $this->app->singleton(UpcomingEventComposer::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer("*", NavigationComposer::class);
        View::composer("*", UpcomingEventComposer::class);
    }
}
