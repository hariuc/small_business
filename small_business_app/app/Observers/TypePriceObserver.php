<?php

namespace App\Observers;

use App\Application\Core\Traits\Logger;
use App\Models\RTypePriceModel;

class TypePriceObserver
{
    use Logger;

    /**
     * Handle the CustromerContractModel "created" event.
     */
    public function created(RTypePriceModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "updated" event.
     */
    public function updated(RTypePriceModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "deleted" event.
     */
    public function deleted(RTypePriceModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "restored" event.
     */
    public function restored(RTypePriceModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "force deleted" event.
     */
    public function forceDeleted(RTypePriceModel $model): void
    {
        $this->info(__METHOD__);
    }
}
