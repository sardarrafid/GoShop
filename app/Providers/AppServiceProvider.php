<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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
     public function boot()
    {
        Blade::if('role', function ($roles) {
            $user = auth()->user();
            if (!$user) return false;

            if (is_array($roles)) {
                return in_array($user->role, $roles, true);
            }

            if (is_string($roles) && (str_contains($roles, '|') || str_contains($roles, ','))) {
                $parts = preg_split('/[|,]/', $roles);
                return in_array($user->role, $parts, true);
            }

            return $user->role === $roles;
        });
    }
}