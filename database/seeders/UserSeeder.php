<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //
        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'test@admin.com',
            'password' => '0'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@user.com',
            'password' => '0'
        ]);

        $faker = \Faker\Factory::create();

        foreach (range(1, 10) as $index) {
            User::factory()->create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => '0'
            ]);
        }
    }
}
