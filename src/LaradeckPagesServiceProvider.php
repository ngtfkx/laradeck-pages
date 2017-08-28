<?php

namespace Ngtfkx\Laradeck\Pages;

use Illuminate\Support\ServiceProvider;
use Ngtfkx\Laradeck\Pages\Models\Page;

class LaradeckPagesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        $this->loadRoutesFrom(__DIR__.'/routes/page.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'laradeck-pages');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}