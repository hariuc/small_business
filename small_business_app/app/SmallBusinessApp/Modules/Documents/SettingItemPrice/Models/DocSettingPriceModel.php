<?php

namespace App\SmallBusinessApp\Modules\Documents\SettingItemPrice\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocSettingPriceModel extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = "scs_settings_prices";

    public function user(): HasOne
    {
        return $this->hasOne(\App\Models\RefUser::class, "id", "user_id");
    }
    public function typePrice(): HasOne
    {
        return $this->hasOne(\App\Models\RefTypePriceModel::class, "id", "type_price_id");
    }

    public function items(): HasMany
    {
        return $this->hasMany(\App\SmallBusinessApp\Modules\Documents\SettingItemPrice\Models\DocSettingPriceItemModel::class, "setting_price_id", "id");
    }
}
