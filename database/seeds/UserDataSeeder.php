<?php

use Illuminate\Database\Seeder;
use App\UserList;
class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<=1000;$i++){
        	UserList::create(
        		[
        			"name" => $faker->name,
        			"password" => $faker->password
        		]
        	);
        }
    }
}
