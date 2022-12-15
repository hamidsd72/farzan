<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $connection = 'mysql2';
    protected $table="photos";
    protected $guarded = [];

    public function pictures()
    {
        return $this->morphTo();
    }

    public function slider()
    {
        return $this->morphTo();
    }
}
