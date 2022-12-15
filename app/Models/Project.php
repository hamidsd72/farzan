<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    // protected $table = '';
    protected $fillable = [
        'cat_id' , 'title' , 'title_en' , 'employer' , 'employer_en' , 'capacity' , 'capacity_en' ,
         'place' , 'place_en' , 'text' , 'text_en' , 'sort_id' , 'status'
    ];

    public function cat() {
        return $this->belogsTo('App\Models\ProjectsCategory', 'cat_id')->first();
    }

    public function photo() {
        return $this->morphOne('App\Models\Photo', 'pictures');
    }

    public function activity() {
        return $this->morphOne('App\Activity', 'activities');
    }

}
