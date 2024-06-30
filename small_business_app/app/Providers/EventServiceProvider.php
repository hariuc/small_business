<?php

namespace App\Providers;

use App\Application\Modules\Banks\Models\BankModel;
use App\Application\Modules\Banks\Observers\BankObserver;
use App\Application\Modules\Currencies\Models\CurrencyModel;
use App\Application\Modules\Currencies\Observers\CurrencyObserver;
use App\Models\RBankAccountModel;
use App\Models\RCategoryModel;
use App\Models\RCustomerModel;
use App\Models\RCustomersContractModel;
use App\Models\RFunctionsModel;
use App\Models\RItemModel;
use App\Models\RTypePriceModel;
use App\Models\RUnitClassifierModel;
use App\Observers\BankAccountObserver;
use App\Observers\CategoryObserver;
use App\Observers\CustomerContractsObserver;
use App\Observers\CustomerObserver;
use App\Observers\FunctionObserver;
use App\Observers\ItemObserver;
use App\Observers\TypePriceObserver;
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
        RUnitClassifierModel::observe(UnitClassifierObserver::class);
        RCustomerModel::observe(CustomerObserver::class);
        RCustomersContractModel::observe(CustomerContractsObserver::class);
        RBankAccountModel::observe(BankAccountObserver::class);
        RFunctionsModel::observe(FunctionObserver::class);
        RCategoryModel::observe(CategoryObserver::class);
        RItemModel::observe(ItemObserver::class);
        RTypePriceModel::observe(TypePriceObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
