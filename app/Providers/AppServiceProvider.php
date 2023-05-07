<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate as FacadesGate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Filament::serving(function () {
            Filament::registerViteTheme('resources/css/app.css');
        });

        FacadesGate::define('use-translation-manager', function (?User $user) {
            // Your authorization logic
            // return $user !== null && $user->hasRole('admin');
        });
    }
}
