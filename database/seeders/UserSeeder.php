<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => '0',
            'photo' => 'team-3.jpg'
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => '0',
            'photo' => 'team-1.jpg'
        ]);

        $faker = Factory::create();

        $source_path = public_path('assets/frontend/img/user');
        $destination_path = public_path('uploads/users');

        File::cleanDirectory($destination_path);
        File::copyDirectory($source_path,$destination_path);

        foreach(range(1,15) as $index){
            $photos = File::files($destination_path);
            $random_photo = $photos[array_rand($photos)];
            $photo_name = $random_photo->getFileName();

            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'photo' => $photo_name
            ]);
        }
    }
}
