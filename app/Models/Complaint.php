<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public $timestamps = false;

    protected $guarded = ['id', 'created_at', 'updated_at'];

//    public function user()
//    {
//        return $this->belongsTo('App\User', 'user_id');
//    }
//
//    public function child()
//    {
//        return $this->hasone('App\QuestionAnswer', 'parent_id');
//    }
//
//    public function comments()
//    {
//        return $this->morphMany('App\Comment', 'commendable');
//    }
//
//    public function activity()
//    {
//        return $this->morphOne('App\Activity', 'activities');
//    }

}