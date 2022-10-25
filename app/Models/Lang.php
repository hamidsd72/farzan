<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    protected static function boot()
    {
        parent::boot();
    }
}
