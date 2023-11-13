<?php

namespace LaravelEasyLog\EasyLog;


use Illuminate\Support\ServiceProvider;

class CustomLogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Assuming the service provider is located directly inside the src/ directory
        $migrationPath = __DIR__ . '/../../database/migrations';

        // Load the migrations
        $this->loadMigrationsFrom($migrationPath);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $migrationPath => database_path('migrations')
            ], 'migrations');
        }

    }

    public function register()
    {
        $this->app->singleton(CustomLogger::class, function ($app) {
            return new CustomLogger();
        });
    }
}
