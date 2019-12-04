<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Teacher extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
         [
         	'id' => '1',
         	'name' => 'teacher',
         	'class' => 'C',
         	'roll' => 'D',
         	'dob' =>'09/10/2019',
         	'phone' =>'09 777 466665',
         	'address'=>'yangon'

         	

        ]

        ]);
        DB::table('admin_settings')->insert([
            [
                'id' => '1',
                'name' => 'MyanmarLinks',
                'phone'=>'1111112222',
                'address' =>'mandalay',
                'image' =>'00493b3f5af40f5e614214702e49cd8f.jpg',
              
                
   
            ]
        ]);

        
    }
}
