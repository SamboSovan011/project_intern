<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';
    protected $fillable = ['user_id', 'img_path', 'title', 'is_main', 'description'];
}