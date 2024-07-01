<?php

namespace App\Providers;

use App\Models\RefFunctionsModel;
use App\Models\RefItemModel;
use App\Models\RefTypePriceModel;
use App\Models\RefUnitClassifierModel;
use App\Observers\FunctionObserver;
use App\Observers\ItemObserver;
use App\Observers\TypePriceObserver;
use App\Observers\UnitClassifierObserver;
use App\SmallBusinessApp\Modules\Catalogs\Banks\Models\BankModel;
use App\SmallBusinessApp\Modules\Catalogs\Banks\Observers\BankObserver;
use App\SmallBusinessApp\Modules\Catalogs\BanksAccounts\Models\BankAccountModel;
use App\SmallBusinessApp\Modules\Catalogs\BanksAccounts\Observers\BankAccountObserver;
use App\SmallBusinessApp\Modules\Catalogs\Category\Models\CategoryModel;
use App\SmallBusinessApp\Modules\Catalogs\Category\Observers\CategoryObserver;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Models\CurrencyModel;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Observers\CurrencyObserver;
use App\SmallBusinessApp\Modules\Catalogs\Customers\Models\CustomerModel;
use App\SmallBusinessApp\Modules\Catalogs\Customers\Observers\CustomerObserver;
use App\SmallBusinessApp\Modules\Catalogs\CustomersContracts\Models\CustomersContractModel;
use App\SmallBusinessApp\Modules\Catalogs\CustomersContracts\Observers\CustomerContractsObserver;
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
        CustomerModel::observe(CustomerObserver::class);
        CustomersContractModel::observe(CustomerContractsObserver::class);
        BankAccountModel::observe(BankAccountObserver::class);
        RefFunctionsModel::observe(FunctionObserver::class);
        CategoryModel::observe(CategoryObserver::class);
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
