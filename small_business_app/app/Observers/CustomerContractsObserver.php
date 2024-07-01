<?php

namespace App\Observers;

use App\SmallBusinessApp\Core\Traits\Logger;
use App\Models\RefCustomersContractModel;


class CustomerContractsObserver
{
    use Logger;

    /**
     * Handle the CustromerContractModel "created" event.
     */
    public function created(RefCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "updated" event.
     */
    public function updated(RefCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "deleted" event.
     */
    public function deleted(RefCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "restored" event.
     */
    public function restored(RefCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "force deleted" event.
     */
    public function forceDeleted(RefCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }
}
