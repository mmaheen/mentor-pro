<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();

        $source_path = public_path('assets/frontend/img/blog');
        $destination_path = public_path('uploads/blogs');

        \Illuminate\Support\Facades\File::cleanDirectory($destination_path);
        \Illuminate\Support\Facades\File::copyDirectory($source_path, $destination_path);

        foreach (range(1, 10) as $index) {
            $photo = \Illuminate\Support\Facades\File::files($destination_path);
            $random_photo = $photo[array_rand($photo)];
            $new_file_name = $random_photo->getFilename();

            $sentence = $faker->realText(maxNbChars: 100, indexSize: 2);

            \App\Models\Blog::create([             
                'title' => $sentence,
                'slug' => \Illuminate\Support\Str::slug($sentence),
                'description' => $faker->paragraph,
                'image' => $new_file_name,
                'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
                'user_id' => \App\Models\User::inRandomOrder()->first()->id,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
