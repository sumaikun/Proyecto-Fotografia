<?php

namespace Konrad\Providers;

use Illuminate\Support\ServiceProvider;
use Konrad\User;
use Konrad\Sales;
use Auth;

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

           $this->app->singleton('Sales', function()
        {
            $query = Sales::Where('usuario','=',Auth::user()->id)->get();
            return   $query;
        });   

    }
}
