<?php

namespace App\Observers;

use App\Application\Core\Traits\Logger;
use App\Models\RefCustomerModel;


class CustomerObserver
{
    use Logger;
    /**
     * Handle the CusromerModel "created" event.
     */
    public function created(RefCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "updated" event.
     */
    public function updated(RefCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "deleted" event.
     */
    public function deleted(RefCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "restored" event.
     */
    public function restored(RefCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "force deleted" event.
     */
    public function forceDeleted(RefCustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }
}
