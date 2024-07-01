<?php

namespace App\SmallBusinessApp\Modules\Catalogs\Customers\Observers;

use App\SmallBusinessApp\Core\Traits\Logger;
use App\SmallBusinessApp\Modules\Catalogs\Customers\Models\CustomerModel;


class CustomerObserver
{
    use Logger;
    /**
     * Handle the CusromerModel "created" event.
     */
    public function created(CustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "updated" event.
     */
    public function updated(CustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "deleted" event.
     */
    public function deleted(CustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "restored" event.
     */
    public function restored(CustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CusromerModel "force deleted" event.
     */
    public function forceDeleted(CustomerModel $cusromerModel): void
    {
        $this->info(__METHOD__);
    }
}
