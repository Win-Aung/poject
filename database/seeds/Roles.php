<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
         [
         	'id' => '1',
         	'name' => 'Admin'
         	

        ],[

        	'id' => '2',
         	'name' => 'Teacher'
         	
        ],[

        	'id' => '3',
         	'name' => 'Writer'
         	
        ]


		]);
    }
}
