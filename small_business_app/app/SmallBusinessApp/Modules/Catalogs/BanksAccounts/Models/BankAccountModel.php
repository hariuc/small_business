<?php

namespace App\SmallBusinessApp\Modules\Catalogs\BanksAccounts\Models;


use App\SmallBusinessApp\Modules\Catalogs\Banks\Models\BankModel;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Models\CurrencyModel;
use App\SmallBusinessApp\Modules\Catalogs\Customers\Models\CustomerModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccountModel extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = "scs_banks_accounts";

    public function bank(): HasOne
    {
        return $this->hasOne(BankModel::class, 'id', 'bank_id');
    }

    public function currency(): HasOne
    {
        return $this->hasOne(CurrencyModel::class, 'id', 'currency_id');
    }

    public function customer(): HasOne
    {
        return $this->hasOne(CustomerModel::class, 'id', 'customer_id');
    }
}
