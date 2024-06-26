<?php

namespace App\Application\Modules\Currencies\Observers;


use App\Application\Core\Traits\Logger;
use App\Application\Modules\Currencies\Models\CurrencyModel;

class CurrencyObserver
{
    use Logger;

    /**
     * Handle the CurrencyModel "created" event.
     */
    public function created(CurrencyModel $currencyModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CurrencyModel "updated" event.
     */
    public function updated(CurrencyModel $currencyModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CurrencyModel "deleted" event.
     */
    public function deleted(CurrencyModel $currencyModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CurrencyModel "restored" event.
     */
    public function restored(CurrencyModel $currencyModel): void
    {
        $this->info(__METHOD__);
    }

    /**
     * Handle the CurrencyModel "force deleted" event.
     */
    public function forceDeleted(CurrencyModel $currencyModel): void
    {
        $this->info(__METHOD__);
    }
}
