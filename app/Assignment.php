<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
     protected $fillable = [
    	'name','faname','maname','gender','sub','year','sdob','dob','phone','image',
    ];
}
