<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Permessions extends Seeder
{     
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permessions')->insert([
         [
         	'id' => '1',
         	'name' => 'Post.Create',
         	'for' => 'post'
         	

        ],[

        	'id' => '2',
         	'name' => 'Post.Update',
         	'for' => 'post'
        ],[

        	'id' => '3',
         	'name' => 'Post.Delete',
         	'for' => 'post'
        ],[

        	'id' => '4',
         	'name' => 'User.Create',
         	'for' => 'user'
        ],[

        	'id' => '6',
         	'name' => 'User.Update',
         	'for' => 'user'
        ],[

        	'id' => '7',
         	'name' => 'User.Delete',
         	'for' => 'user'
        ],[

        	'id' => '8',
         	'name' => 'Post.Publish',
         	'for' => 'post'
        ],[

        	'id' => '9',
         	'name' => 'Tag.CRUD',
         	'for' => 'other'
        ],[

        	'id' => '10',
         	'name' => 'Category-CRUD',
         	'for' => 'other'
        ]

		]);
    }
}
