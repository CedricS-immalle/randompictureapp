<?php

use Illuminate\Database\Seeder;

class create_users_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('create_users_table')->insert([ 
        	'id'=>'1',
        	'name' => ('TestGebruiker'),
            'email' => 'testgebruiker'.'test.com',
            'password' => bcrypt('Test123'),
        	])
        
    }
}
