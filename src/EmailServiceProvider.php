<?php

namespace Thangbeo\Email;

use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        {
            include __DIR__.'/routes.php';
            include __DIR__.'/model/Email.php';
            include __DIR__.'/controller/EmailController.php';
            $this->loadMigrationsFrom(__DIR__.'/migration');
            $this->publishes([__DIR__.'/public/asset-email' => public_path('asset-email')], 'email');
            $this->loadViewsFrom(__DIR__.'/views', 'email');
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
