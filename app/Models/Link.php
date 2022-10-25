<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'id',
        'title',
        'en_title',
        'url',
        'status',
        'sort',
        'position',
        'created_at',
        'updated_at'
    ];
}
