<?php

namespace Akashdevs\LaravelLogEnhancer;
use Illuminate\Support\ServiceProvider;

class LaravelLogEnhancerServiceProvider extends ServiceProvider{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel_log_enhancer.php' => config_path('laravel_log_enhancer.php'),
        ], 'laravel-log-enhancer-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel_log_enhancer.php',
            'laravel_log_enhancer'
        );
    }
}
