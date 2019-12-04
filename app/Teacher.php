<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    	'name','class','roll','dob','phone','address','image',
    ];
}
