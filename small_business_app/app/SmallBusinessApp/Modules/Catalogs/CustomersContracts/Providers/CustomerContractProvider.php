<?php

namespace App\SmallBusinessApp\Modules\Catalogs\CustomersContracts\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerContractProvider extends ServiceProvider
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
