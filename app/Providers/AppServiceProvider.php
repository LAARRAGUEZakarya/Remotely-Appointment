<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
        $services = [
            'ClientService',
            'AdminService',
        ];

        foreach ($services as $service) {
            $this->app->bind(
                "App\Services\\{$service}\\I{$service}",
                "App\Services\\{$service}\\{$service}"
            );
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
