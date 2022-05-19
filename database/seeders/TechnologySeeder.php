<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $technology = [
        //    [ 'name' =>'cname',
        //     'type' => 'database'],
        //     [ 'name' =>'dname',
        //     'type' => 'database'],
        // ];

        // foreach ($technology as $key => $tech) {
        //     Technology::create($tech);
        // }

           $faker = Faker::create();
           foreach(range(0,10) as $value){
            DB::table('technologies')->insert([
            'name' => $faker->name,
            'type' => 'framework',

          ]);
        }

    }
}
