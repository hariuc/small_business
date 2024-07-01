<?php

namespace App\SmallBusinessApp\Modules\Catalogs\BanksAccounts\Providers;

use Illuminate\Support\ServiceProvider;

class BankAccountrProvider extends ServiceProvider
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
