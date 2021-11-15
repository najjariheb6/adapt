<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable = ['title','discription','url'];
   protected $dates =['created_at','updated_at'];
}