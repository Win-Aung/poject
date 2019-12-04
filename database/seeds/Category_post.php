<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Category_post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_posts')->insert([
         [
         	'post_id' => '3',
         	'category_id' => '2'

        ]

		]);
    }
}
