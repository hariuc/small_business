<?php

namespace App\App\Modules\Banks\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory, HasUuids;

//    protected static function boot()
//    {
//        parent::boot();
//        static::creating(function ($model) {})
//    }

}
