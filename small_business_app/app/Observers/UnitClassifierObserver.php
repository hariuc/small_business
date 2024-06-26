<?php

namespace App\Observers;

use App\Application\Core\Traits\Logger;
use App\Models\UnitClassifierModel;

class UnitClassifierObserver
{
    use Logger;

    /**
     * Handle the UnitClassifierModel "created" event.
     */
    public function created(UnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "updated" event.
     */
    public function updated(UnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "deleted" event.
     */
    public function deleted(UnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "restored" event.
     */
    public function restored(UnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the UnitClassifierModel "force deleted" event.
     */
    public function forceDeleted(UnitClassifierModel $unitClassifierModel): void
    {
        $this->info(__METHOD__);
    }
}
