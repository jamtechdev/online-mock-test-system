<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
       foreach(range(0,10) as $value){
        DB::table('technologies')->insert([
        'name' => $faker->name,
        'type' => $faker->randomElement(["php","python","mysql","nodejs","js","jquery"]),
       
      ]);
    }

    }
}
