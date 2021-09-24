<?php

use Illuminate\Database\Seeder;
use App\testformModel; 

class testformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        testformModel::create(
            [
                "name" => "Arif",
                "email" => "ariful48@gmail.com"
            ]
        );
    }
}