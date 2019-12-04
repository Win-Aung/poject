<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Permession_role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('permession_role')->insert([
         [
         	'role_id' => '5',
         	'permession_id' => '1'
         	
         	

        ],[

        	'role_id' => '5',
         	'permession_id' => '8'
        ],[

        	'role_id' => '5',
         	'permession_id' => '10'
        ],[

        	'role_id' => '6',
         	'permession_id' => '1'
        ],[

        	'role_id' => '6',
         	'permession_id' => '7'
        ],[

        	'role_id' => '6',
         	'permession_id' => '10'
        ],[

        	'role_id' => '1',
         	'permession_id' => '8'
        ],[

        	'role_id' => '1',
         	'permession_id' => '4'
        ],[

        	'role_id' => '1',
         	'permession_id' => '6'
        ],[

        	'role_id' => '1',
         	'permession_id' => '7'
        ],[

        	'role_id' => '1',
         	'permession_id' => '9'
        ],[

        	'role_id' => '1',
         	'permession_id' => '10'
        ],[

        	'role_id' => '2',
         	'permession_id' => '1'
        ],[

        	'role_id' => '2',
         	'permession_id' => '2'
        ],[

        	'role_id' => '2',
         	'permession_id' => '3'
        ],[

        	'role_id' => '2',
         	'permession_id' => '8'
        ],[

        	'role_id' => '2',
         	'permession_id' => '4'
        ],[

        	'role_id' => '2',
         	'permession_id' => '6'
        ],[

        	'role_id' => '2',
         	'permession_id' => '7'
        ],[

        	'role_id' => '2',
         	'permession_id' => '11'
        ],[

        	'role_id' => '2',
         	'permession_id' => '9'
        ],[

        	'role_id' => '2',
         	'permession_id' => '10'
        ]





		]);
    }
}

