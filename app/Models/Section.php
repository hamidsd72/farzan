<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
        protected $fillable = [
                'id',
                'type', 
                'title', 
                'shor_text', 
                'description', 
                'status', 
                'sort',
                'pic',
                'created_at', 
                'updated_at',
        ];
}
