<?php

use Illuminate\Database\Seeder;
use App\Courselist;
class courselistDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<=10;$i++){
        	Courselist::create(
        		[
        			"courselist_name" => $faker->name,
                    "courselist_desc" => $faker->text,
                    "data_aos" => $faker->text
        		]
        	);
        }
    }
}
