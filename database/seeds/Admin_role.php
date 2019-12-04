<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Admin_role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_role')->insert([
         [
        	'id' => '7',
        	'admin_id'=> '1',
        	'role_id'=> '1'
        	
        ],[

        	'id' => '9',
        	'admin_id'=> '3',
        	'role_id'=> '2'
        ],[
        	'id' => '10',
        	'admin_id'=> '7',
        	'role_id'=> '2'

        ],[
        	'id' => '11',
        	'admin_id'=> '8',
        	'role_id'=> '3'

        ],[

        	'id' => '12',
        	'admin_id'=> '9',
        	'role_id'=> '1'

        ],[

        	'id' => '13',
        	'admin_id'=> '10',
        	'role_id'=> '1'

        ],[
        	'id' => '14',
        	'admin_id'=> '11',
        	'role_id'=> '1'

        ]

		]);
    }
}
