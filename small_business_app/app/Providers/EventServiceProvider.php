<?php

namespace App\Providers;

use App\Application\Modules\Banks\Models\BankModel;
use App\Application\Modules\Banks\Observers\BankObserver;
use App\Application\Modules\Currencies\Models\CurrencyModel;
use App\Application\Modules\Currencies\Observers\CurrencyObserver;
use App\Models\BankAccountModel;
use App\Models\CategoryModel;
use App\Models\CustomerModel;
use App\Models\CustomersContractModel;
use App\Models\FunctionsModel;
use App\Models\UnitClassifierModel;
use App\Observers\BankAccountObserver;
use App\Observers\CategoryObserver;
use App\Observers\CustomerContractsObserver;
use App\Observers\CustomerObserver;
use App\Observers\FunctionObserver;
use App\Observers\UnitClassifierObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        BankModel::observe(BankObserver::class);
        CurrencyModel::observe(CurrencyObserver::class);
        UnitClassifierModel::observe(UnitClassifierObserver::class);
        CustomerModel::observe(CustomerObserver::class);
        CustomersContractModel::observe(CustomerContractsObserver::class);
        BankAccountModel::observe(BankAccountObserver::class);
        FunctionsModel::observe(FunctionObserver::class);
        CategoryModel::observe(CategoryObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
