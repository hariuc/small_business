<?php

namespace App\Providers;

use App\SmallBusinessApp\Modules\Catalogs\Banks\Models\BankModel;
use App\SmallBusinessApp\Modules\Catalogs\Banks\Observers\BankObserver;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Models\CurrencyModel;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Observers\CurrencyObserver;
use App\Models\RefBankAccountModel;
use App\Models\RefCategoryModel;
use App\Models\RefCustomerModel;
use App\Models\RefCustomersContractModel;
use App\Models\RefFunctionsModel;
use App\Models\RefItemModel;
use App\Models\RefTypePriceModel;
use App\Models\RefUnitClassifierModel;
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
        RefUnitClassifierModel::observe(UnitClassifierObserver::class);
        RefCustomerModel::observe(CustomerObserver::class);
        RefCustomersContractModel::observe(CustomerContractsObserver::class);
        RefBankAccountModel::observe(BankAccountObserver::class);
        RefFunctionsModel::observe(FunctionObserver::class);
        RefCategoryModel::observe(CategoryObserver::class);
        RefItemModel::observe(ItemObserver::class);
        RefTypePriceModel::observe(TypePriceObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
