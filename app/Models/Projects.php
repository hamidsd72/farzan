<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    // protected $table = '';
    protected $fillable = [
        'name' , 'name_en', 'sort_id' , 'status'
    ];

    public function photo() {
        return $this->morphOne('App\Photo', 'pictures');
    }

    public function activity() {
        return $this->morphOne('App\Activity', 'activities');
    }

}
