<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsCategory extends Model {

    // protected $table = '';
    protected $fillable = [
        'name' , 'name_en', 'sort_id' , 'status'
    ];

    public function projects() {
        return $this->hasMany('App\Models\Project', 'cat_id');
    }

    public function activity() {
        return $this->morphOne('App\Activity', 'activities');
    }

}
