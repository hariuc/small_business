<?php

namespace App\Observers;

use App\Application\Core\Traits\Logger;
use App\Models\RCustomersContractModel;


class CustomerContractsObserver
{
    use Logger;

    /**
     * Handle the CustromerContractModel "created" event.
     */
    public function created(RCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "updated" event.
     */
    public function updated(RCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "deleted" event.
     */
    public function deleted(RCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "restored" event.
     */
    public function restored(RCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "force deleted" event.
     */
    public function forceDeleted(RCustomersContractModel $model): void
    {
        $this->info(__METHOD__);
    }
}
