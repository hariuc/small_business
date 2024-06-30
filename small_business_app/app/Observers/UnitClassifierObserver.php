<?php

namespace App\Observers;

use App\Application\Core\Traits\Logger;
use App\Models\RUnitClassifierModel;

class UnitClassifierObserver
{
    use Logger;

    /**
     * Handle the UnitClassifierModel "created" event.
     */
    public function created(RUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "updated" event.
     */
    public function updated(RUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "deleted" event.
     */
    public function deleted(RUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "restored" event.
     */
    public function restored(RUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "force deleted" event.
     */
    public function forceDeleted(RUnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }
}
