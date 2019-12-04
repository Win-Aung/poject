<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Admindata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
         [
        	'id' => '1',
        	'name'=> 'Admin',
        	'email'=> 'admin@gmail.com',
        	'password' =>'$2y$10$v7P8okSh.NfGBGA2op7dJ.kXieKY19KzaX6Nl.2J8w0fGZwKIxXK2',
        	'phone' =>'09785220691',
        	'status' =>'1'
        ],[

        	'id' => '2',
        	'name'=> 'Teacher',
        	'email'=> 'teacher@gmail.com',
        	'password' =>'$2y$10$gKWcBG7j/QWzZcQ3xVB2jeG34RyUXlxWoVfdXhhcV0R4HuV/xVoU2',
        	'phone' =>'09785220691',
        	'status' =>'1'
        ]

		]);
    }
}

