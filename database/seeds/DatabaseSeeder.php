<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('users')->insert([
            'name'      => 'shkatov.dmitry',
            'email'     => 'shkatov.dmitry@gmail.com',
            'password'  => bcrypt('123qwe'),
        ]);

        for ($i = 0; $i < 50; $i++) { 
            
        DB::table('city')->insert([
            'name' => str_random(10),
        ]);            
        }
	}

}
