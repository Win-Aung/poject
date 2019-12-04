<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
         [
         	'id' => '1',
         	'name' => 'kaungkhant',
         	'email' => 'kaungkhant@gmail.com',
         	'email_verified_at' => '2019-09-30 04:59:51',
         	'password' =>'$2y$10$v7P8okSh.NfGBGA2op7dJ.kXieKY19KzaX6Nl.2J8w0fGZwKIxXK2',
         	'adnumber' =>'1',
			 'faname' =>'khant',
			 'section'=>'A',
         	'maname' => 'a',
         	'year' => '2019-10-09',
         	'class'=> 'A',
         	'datepicker' =>'2019-10-23',
         	'phone'=>'09785220691',
         	'address' =>'mandalay',
         	'roll' => '1',
         	'image' =>'3cc89742f6cdf82fa0253c5855e466c4.jpg',
         	'is_approved' =>'1',
         	'gender' =>'Male',
         	'dob'=>'09/28/2019'

         	

		 ],
		 [
			'id' => '2',
			'name' => 'winaung',
			'email' => 'winaung@gmail.com',
			'email_verified_at' => '2019-09-30 04:59:51',
			'password' =>'$2y$10$v7P8okSh.NfGBGA2op7dJ.kXieKY19KzaX6Nl.2J8w0fGZwKIxXK2',
			'adnumber' =>'2',
			'faname' =>'UU',
			'section'=>'B',
			'maname' => 'MM',
			'year' => '2019-10-09',
			'class'=> 'A',
			'datepicker' =>'2019-10-23',
			'phone'=>'09420076715',
			'address' =>'mandalay',
			'roll' => '1',
			'image' =>'49dea7d37385ed4b6035559951ae6b4f.jpg',
			'is_approved' =>'1',
			'gender' =>'Male',
			'dob'=>'09/28/2019'

			

	   ]



		]);

		
    }
}
