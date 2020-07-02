<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['name','des', 
    'meta_des',
    'meta_keywords','youtube',
    'cat_id','user_id',
    'published', 'image'
    ];
}
