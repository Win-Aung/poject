<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class AdminSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_settings')->insert([
            [
                'id' => '1',
                'name' => 'MyanmarLinks',
                'phone'=>'1111112222',
                'address' =>'mandalay',
                'roll' => '1',
                'image' =>'00493b3f5af40f5e614214702e49cd8f.jpg',
                'address' => 'yangon/mdy'

                
   
            ]
        ]);
    }
}
