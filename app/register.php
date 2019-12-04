<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
    	'name','class','faname','maname','gender','section','year','datepicker','phone','address','email','image',
    ];
}
