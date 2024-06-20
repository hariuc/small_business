<?php

namespace App\App\Modules\Banks\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = "scs_banks";

//    protected static function boot()
//    {
//        parent::boot();
//        static::creating(function ($model) {})
//    }

}
