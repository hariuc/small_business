<?php

namespace App\Observers;

use App\Application\Core\Traits\Logger;
use App\Models\RItemModel;

class ItemObserver
{
    use Logger;

    /**
     * Handle the CustromerContractModel "created" event.
     */
    public function created(RItemModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "updated" event.
     */
    public function updated(RItemModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "deleted" event.
     */
    public function deleted(RItemModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "restored" event.
     */
    public function restored(RItemModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "force deleted" event.
     */
    public function forceDeleted(RItemModel $model): void
    {
        $this->info(__METHOD__);
    }
}
