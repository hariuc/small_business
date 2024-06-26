<?php

namespace App\SmallBusinessApp\Modules\Catalogs\Category\Observers;

use App\SmallBusinessApp\Core\Traits\Logger;
use App\SmallBusinessApp\Modules\Catalogs\Category\Models\CategoryModel;

class CategoryObserver
{
    use Logger;

    /**
     * Handle the CustromerContractModel "created" event.
     */
    public function created(CategoryModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "updated" event.
     */
    public function updated(CategoryModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "deleted" event.
     */
    public function deleted(CategoryModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "restored" event.
     */
    public function restored(CategoryModel $model): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CustromerContractModel "force deleted" event.
     */
    public function forceDeleted(CategoryModel $model): void
    {
        $this->info(__METHOD__);
    }
}
