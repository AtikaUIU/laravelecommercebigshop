<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(array(
        	array(
		 'name' => "Atika",
		 'email' => 'asaaatika@gmail.com',
		 'password' => bcrypt('12345678'),
		        	),
		        	array(
		 'name' => "Asa",
		 'email' => 'Atika@gmail.com',
		 'password' => bcrypt('12345678'),
		        	)
		));
    }
}
