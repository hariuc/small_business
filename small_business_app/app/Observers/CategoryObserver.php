<?php

namespace App\Observers;

use App\Application\Core\Traits\Logger;
use App\Models\RCategoryModel;

class CategoryObserver
{
    use Logger;

    /**
     * Handle the CustromerContractModel "created" event.
     */
    public function created(RCategoryModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "updated" event.
     */
    public function updated(RCategoryModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "deleted" event.
     */
    public function deleted(RCategoryModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "restored" event.
     */
    public function restored(RCategoryModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "force deleted" event.
     */
    public function forceDeleted(RCategoryModel $model): void
    {
        $this->info(__METHOD__);
    }
}
