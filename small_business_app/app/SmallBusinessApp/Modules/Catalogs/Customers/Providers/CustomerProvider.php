<?php

namespace App\SmallBusinessApp\Modules\Catalogs\Customers\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
    }
}
