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
    	// Seeding for Sample User
		DB::table('guests')->insert([
            'firstName' => 'sam',
            'lastName' => 'chan'
        ]);        
    }
}
