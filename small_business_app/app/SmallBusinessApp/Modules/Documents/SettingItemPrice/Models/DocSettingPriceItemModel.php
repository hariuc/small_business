<?php

namespace App\SmallBusinessApp\Modules\Documents\SettingItemPrice\Models;


use App\Models\RefItemModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocSettingPriceItemModel extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = "scs_settings_price_item";

    public function settingPrice(): HasOne
    {
        return $this->hasOne(DocSettingPriceModel::class, "id", "setting_price_id");
    }
    public function typePrice(): HasOne
    {
        return $this->hasOne(RefItemModel::class, "id", "item_id");
    }


}
