<?php

namespace App\Models;

use App\Application\Modules\Banks\Models\BankModel;
use App\Application\Modules\Currencies\Models\CurrencyModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class RBankAccountModel extends Model
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
        return $this->hasOne(RCustomerModel::class, 'id', 'customer_id');
    }
}
