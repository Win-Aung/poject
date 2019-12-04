<?php

namespace App;

use App\tag;
use App\post_tag;
use App\categories;
use App\categories_post;
use App\post;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts()
    {
    	return $this->belongsToMany('App\post','category_posts');
    }
}
