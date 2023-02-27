<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\User;
use Faker\Factory as Faker;

class GroupTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = User::pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            Group::create([
                'name' => $faker->word(),
                'frequency' => $faker->numberBetween(2, 5),
                'amount' => $faker->numberBetween(10, 1000),
                'status' => $faker->randomElement(['ACTIVE', 'INACTIVE']),
                'admin' => $faker->randomElement($users),
                'startingAt' => $faker->dateTimeBetween('-1 month', '+1 month'),
                'endingAt' => $faker->dateTimeBetween('+1 month', '+3 months'),
            ]);
        }
    }
}