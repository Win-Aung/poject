<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
         [
        	'id' => '2',
        	'name'=> 'master',
        	'slug'=>'master'
        ]

		]);
    }
}
