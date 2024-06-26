<?php

namespace App\Observers;

use App\SmallBusinessApp\Core\Traits\Logger;
use App\Models\RefUnitClassifierModel;

class UnitClassifierObserver
{
    use Logger;

    /**
     * Handle the UnitClassifierModel "created" event.
     */
    public function created(RefUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "updated" event.
     */
    public function updated(RefUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "deleted" event.
     */
    public function deleted(RefUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "restored" event.
     */
    public function restored(RefUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "force deleted" event.
     */
    public function forceDeleted(RefUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }
}
