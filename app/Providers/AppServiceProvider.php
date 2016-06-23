<?php

namespace Konrad\Providers;

use Illuminate\Support\ServiceProvider;
use Konrad\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


           $this->app->singleton('Usuarios', function()
        {
            $query = User::All();
            return   $query;
        });

    }
}
