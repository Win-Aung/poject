<?php

use Illuminate\Database\Seeder;

class Croles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('croles')->insert([
         [
         	'id' => '3',
         	'country' => 'Gread1',
         	'state' => 'A',
         	'city' => '2019'

        ],[

        	'id' => '4',
         	'country' => 'Gread1',
         	'state' => 'B',
         	'city' => '2019'
        ]

		]);
    }
}
