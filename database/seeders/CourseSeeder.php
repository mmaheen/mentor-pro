<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $courses = [
            "Introduction to Programming","Data Structures & Algorithms","Digital Logic Design",
            "Object-Oriented Programming","Artificial Intelligence","Computer Networks",
            "Software Engineering", "Cyber Security","Machine Learning","Database Management Systems","Web Development",
            "Operating Systems", "Computer Graphics","Cloud Computing","Internet of Things (IoT)",
            "Electrical Circuits","Electronics","Electronics Laboratory",
            "Green Computing", "Financial and Managerial Accounting","English Literature","Linguistics",
            "Creative Writing","Business Communication","Academic Writing","Translation Studies"
        ];

        $source_path = public_path('assets/frontend/img/course');
        $destination_path = public_path('uploads/courses');

        \Illuminate\Support\Facades\File::cleanDirectory($destination_path);
        \Illuminate\Support\Facades\File::copyDirectory($source_path, $destination_path);

        foreach ($courses as $course) {
            $photo = \Illuminate\Support\Facades\File::files($destination_path);
            $random_photo = $photo[array_rand($photo)];
            $new_file_name = $random_photo->getFilename();

            \App\Models\Course::create([
                'name' => $course,
                'slug' => \Illuminate\Support\Str::slug($course),
                'description' => $faker->paragraph(3),
                'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
                'user_id' => \App\Models\User::inRandomOrder()->first()->id,
                'price' => $faker->numberBetween(1000, 50000),
                'image' => $new_file_name
            ]);
        }
    }
}
