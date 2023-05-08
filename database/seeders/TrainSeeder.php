<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Train::table('trains')->insert([
                'name' => $faker->name,
                'departure' => $faker->city,
                'destination' => $faker->city,
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
            ]);
        }
    }
}
