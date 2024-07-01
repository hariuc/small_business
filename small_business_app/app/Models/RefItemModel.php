<?php

namespace App\Models;

use App\SmallBusinessApp\Modules\Catalogs\Category\Models\CategoryModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class RefItemModel extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = "scs_nomenclaturies";

    public function category(): HasOne
    {
        return $this->hasOne(CategoryModel::class, 'id', 'category_id');
    }

    public function unit(): HasOne
    {
        return $this->hasOne(RefUnitClassifierModel::class, 'id', 'unit_id');
    }
}
