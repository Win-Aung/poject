<?php

namespace App;
use App\tag;
use App\post;
use App\post_tag;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
   public function posts() 
     {
     	return $this->belongsToMany('App\post','post_tags');
     }
}
