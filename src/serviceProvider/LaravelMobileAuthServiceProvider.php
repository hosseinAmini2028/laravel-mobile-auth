<?php

namespace Nikahitec\LaravelMobileAuth\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Nikahitec\LaravelMobileAuth\LaravelMobileAuth;

class LaravelMobileAuthServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'LaravelMobileAuth');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../config/laravel-mobile-auth.php' => config_path('laravel-mobile-auth.php'),
        ],'laravel-mobile-auth-config');


    }

    public function register(){
        $this->app->bind('LaravelMobileAuth',function(){
            return new LaravelMobileAuth();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-mobile-auth.php', 'LaravelMobileAuth'
        );
    }
}