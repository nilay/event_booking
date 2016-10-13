<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('halls')->insert([
        	[
	        	'name' => 'Pragati Maidan',
	        	'cells_x' => 12,
	        	'cells_y' => 6,
	        	'latitude' => 40.73,
	        	'longitude' => -73.93

        	],
 			[	
	        	'name' => 'Indira Gandhi Stadium',
	        	'cells_x' => 4,
	        	'cells_y' => 10,
	        	'latitude' => 40.72,
	        	'longitude' => -73.92

        	]
        ]);

        DB::table('events')->insert([
        	[
        		'name' => 'Trade Fare 2016',
        		'Description' => 'Yearly Indian trade fare happens at New Delhi',
        		'hall_id' => 1,
        		'from_date' => '2016-11-14',
        		'to_date' => '2016-11-30'
        	],
        	[
        		'name' => 'Auto Fare 2016',
        		'Description' => 'Yearly Indian Auto fare at New Delhi',
        		'hall_id' => 2,
        		'from_date' => '2016-11-01',
        		'to_date' => '2016-11-10'
        	]


        ]);



        DB::table('stands')->insert([
        	['hall_id' => 1,'cell_x' => 2,'cell_y' => 1],
        	['hall_id' => 1,'cell_x' => 2,'cell_y' => 2],
        	['hall_id' => 1,'cell_x' => 2,'cell_y' => 3],
        	['hall_id' => 1,'cell_x' => 2,'cell_y' => 4],
        	['hall_id' => 1,'cell_x' => 2,'cell_y' => 5],
        	['hall_id' => 1,'cell_x' => 2,'cell_y' => 6],
        	['hall_id' => 1,'cell_x' => 3,'cell_y' => 1],
        	['hall_id' => 1,'cell_x' => 3,'cell_y' => 2],
        	['hall_id' => 1,'cell_x' => 3,'cell_y' => 3],
        	['hall_id' => 1,'cell_x' => 3,'cell_y' => 4],
        	['hall_id' => 1,'cell_x' => 3,'cell_y' => 5],
        	['hall_id' => 1,'cell_x' => 3,'cell_y' => 6],
        	['hall_id' => 1,'cell_x' => 6,'cell_y' => 1],
        	['hall_id' => 1,'cell_x' => 6,'cell_y' => 2],
        	['hall_id' => 1,'cell_x' => 6,'cell_y' => 3],
        	['hall_id' => 1,'cell_x' => 6,'cell_y' => 4],
        	['hall_id' => 1,'cell_x' => 6,'cell_y' => 5],
        	['hall_id' => 1,'cell_x' => 6,'cell_y' => 6],
        	['hall_id' => 1,'cell_x' => 7,'cell_y' => 1],
        	['hall_id' => 1,'cell_x' => 7,'cell_y' => 2],
        	['hall_id' => 1,'cell_x' => 7,'cell_y' => 3],
        	['hall_id' => 1,'cell_x' => 7,'cell_y' => 4],
        	['hall_id' => 1,'cell_x' => 7,'cell_y' => 5],
        	['hall_id' => 1,'cell_x' => 7,'cell_y' => 6],
        	['hall_id' => 1,'cell_x' => 10,'cell_y' => 1],
        	['hall_id' => 1,'cell_x' => 10,'cell_y' => 2],
        	['hall_id' => 1,'cell_x' => 10,'cell_y' => 3],
        	['hall_id' => 1,'cell_x' => 10,'cell_y' => 4],
        	['hall_id' => 1,'cell_x' => 10,'cell_y' => 5],
        	['hall_id' => 1,'cell_x' => 10,'cell_y' => 6],
        	['hall_id' => 1,'cell_x' => 11,'cell_y' => 1],
        	['hall_id' => 1,'cell_x' => 11,'cell_y' => 2],
        	['hall_id' => 1,'cell_x' => 11,'cell_y' => 3],
        	['hall_id' => 1,'cell_x' => 11,'cell_y' => 4],
        	['hall_id' => 1,'cell_x' => 11,'cell_y' => 5],
        	['hall_id' => 1,'cell_x' => 11,'cell_y' => 6],


    		['hall_id' => 2,'cell_x' => 1,'cell_y' => 1],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 2],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 3],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 4],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 5],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 6],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 7],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 8],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 9],
        	['hall_id' => 2,'cell_x' => 1,'cell_y' => 10],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 1],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 2],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 3],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 4],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 5],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 6],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 7],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 8],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 9],
        	['hall_id' => 2,'cell_x' => 4,'cell_y' => 10]
        	

        ]);



    }
}
