<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 
        	'id'=>'1',
        	'name' => ('TestGebruiker'),
            'email' => 'testgebruiker'.'test.com',
            'password' => bcrypt('Test123'),
        	]);

    }
}
