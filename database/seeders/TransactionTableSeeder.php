<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransactionTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = User::pluck('id')->toArray();
        $groups = Group::pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            Transaction::create([
                'from' => $faker->randomElement($users),
                'to' => $faker->randomElement($users),
                'amount' => $faker->numberBetween(10, 1000),
                'status' => $faker->randomElement(['PENDING', 'PROCESSED']),
                'group_id' => $faker->randomElement($groups),
            ]);
        }
    }
}