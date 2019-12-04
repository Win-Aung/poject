<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('posts')->insert([
            [
                
            'name' => $faker->name,
            'title' => $faker->title,
            'subtitle' => $faker->subtitle,
            'slug' => $faker->slub,
            'status' => $faker->status,
            'posted_by' => $faker->posted_by,
            'image' => $faker->image,
            'tag' =>$faker->tag,
            'category' => $faker->category,
            'like' => $faker->like,
            'dislike' => $faker->dislike,
                    
   
            ]
        ]);
    }
   
}
