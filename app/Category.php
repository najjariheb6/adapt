<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable = ['title','discription','url','parent_id'];
   protected $dates =['created_at','updated_at'];
   public function childs() {
      return $this->hasMany('App\Category','parent_id','id') ;
   }
}
