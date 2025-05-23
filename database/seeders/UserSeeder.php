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
        $source_path = public_path('assets/frontend/img/user');
        $destination_path = public_path('uploads/users');
        
        \Illuminate\Support\Facades\File::cleanDirectory($destination_path);
        \Illuminate\Support\Facades\File::copyDirectory($source_path, $destination_path);

        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'test@admin.com',
            'password' => '0',
            'image' => 'img_1.jpg',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@user.com',
            'password' => '0',
            'image' => 'testimonial_img_3.png',
        ]);

        $faker = \Faker\Factory::create();

        foreach (range(1, 10) as $index) {
            $photo = \Illuminate\Support\Facades\File::files($destination_path);
            $random_photo = $photo[array_rand($photo)];
            $new_file_name = $random_photo->getFilename();

            User::factory()->create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => '0',
                'image' => $new_file_name,
            ]);
        }
    }
}
