<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
     protected $fillable = [
    	'name','class','faname','maname','gender','section','year','dob','phone','address','email','image',
    ];
}
