<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function parent()
    {
        return $this->hasOne('App\Wish', 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Wish', 'parent_id');
    }

    public function activity()
    {
        return $this->morphOne('App\Activity', 'activities');
    }

}
