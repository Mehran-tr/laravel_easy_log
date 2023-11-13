<?php

namespace laravel_easy_log\easy_log;

use Illuminate\Support\ServiceProvider;

class CustomLoggerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {
        $this->app->singleton(CustomLogger::class, function ($app) {
            return new CustomLogger();
        });
    }
}
