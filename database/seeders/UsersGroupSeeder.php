<?php

namespace Database\Seeders;

use App\Models\UsersGroup;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersGroupSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = User::pluck('id')->toArray();
        $groups = Group::pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            UsersGroup::create([
                'user_id' => $faker->randomElement($users),
                'group_id' => $faker->randomElement($groups),
            ]);
        }
    }
}