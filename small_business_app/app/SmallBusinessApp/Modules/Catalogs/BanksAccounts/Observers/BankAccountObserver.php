<?php

namespace App\SmallBusinessApp\Modules\Catalogs\BanksAccounts\Observers;

use App\SmallBusinessApp\Core\Traits\Logger;
use App\SmallBusinessApp\Modules\Catalogs\BanksAccounts\Models\BankAccountModel;

class BankAccountObserver
{
    use Logger;

    /**
     * Handle the CustromerContractModel "created" event.
     */
    public function created(BankAccountModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "updated" event.
     */
    public function updated(BankAccountModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "deleted" event.
     */
    public function deleted(BankAccountModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "restored" event.
     */
    public function restored(BankAccountModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "force deleted" event.
     */
    public function forceDeleted(BankAccountModel $model): void
    {
        $this->info(__METHOD__);
    }
}
