<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class RItemModel extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = "scs_nomenclaturies";

    public function category(): HasOne
    {
        return $this->hasOne(RCategoryModel::class, 'id', 'category_id');
    }

    public function unit(): HasOne
    {
        return $this->hasOne(RUnitClassifierModel::class, 'id', 'unit_id');
    }
}
