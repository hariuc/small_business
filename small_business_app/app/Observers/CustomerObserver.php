<?php

namespace App\Observers;

use App\Application\Core\Traits\Logger;
use App\Models\RCustomerModel;


class CustomerObserver
{
    use Logger;
    /**
     * Handle the CusromerModel "created" event.
     */
    public function created(RCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "updated" event.
     */
    public function updated(RCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "deleted" event.
     */
    public function deleted(RCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "restored" event.
     */
    public function restored(RCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "force deleted" event.
     */
    public function forceDeleted(RCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }
}
