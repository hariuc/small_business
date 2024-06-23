<?php

namespace App\Application\Modules\Banks\Observers;

use App\Application\Core\Traits\Logger;
use App\Application\Modules\Banks\Models\BankModel;


class BankObserver
{
    use Logger;

    public function creating(BankModel $model)
    {
        $this->info(__METHOD__);
    }


    public function created(BankModel $model): void
    {
        $this->info(__METHOD__);
    }


    public function updated(BankModel $model): void
    {
        $this->info(__METHOD__);
    }


    public function deleted(BankModel $model): void
    {
        $this->info(__METHOD__);
    }


    public function restored(BankModel $model): void
    {
        $this->info(__METHOD__);
    }


    public function forceDeleted(BankModel $model): void
    {
        $this->info(__METHOD__);
    }
}
