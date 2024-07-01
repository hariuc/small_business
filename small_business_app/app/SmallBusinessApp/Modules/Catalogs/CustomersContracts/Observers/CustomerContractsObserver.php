<?php

namespace App\SmallBusinessApp\Modules\Catalogs\CustomersContracts\Observers;

use App\SmallBusinessApp\Core\Traits\Logger;
use App\SmallBusinessApp\Modules\Catalogs\CustomersContracts\Models\CustomersContractModel;


class CustomerContractsObserver
{
    use Logger;

    /**
     * Handle the CustromerContractModel "created" event.
     */
    public function created(CustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "updated" event.
     */
    public function updated(CustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "deleted" event.
     */
    public function deleted(CustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "restored" event.
     */
    public function restored(CustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "force deleted" event.
     */
    public function forceDeleted(CustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }
}
