<?php

namespace App;
use App\tag;
use App\post_tag;
use App\categories;
use App\categories_post;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
     public function tags() 
     {
     	return $this->belongsToMany('App\tag','post_tags');
     }


     public function categories()
    {
    	return $this->belongsToMany('App\category','category_posts');
    }


    public function getRouteKeyName()
    {
    	 return 'slug';
    }
}


