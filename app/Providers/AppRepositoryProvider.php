<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
        $models = [
            'User',
            'Client',
            'Appointment',
        ];

        foreach ($models as $model) {
            $this->app->bind(
                "App\Repositories\\{$model}RepositoryInterface",
                "App\Repositories\\{$model}Repository"
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
