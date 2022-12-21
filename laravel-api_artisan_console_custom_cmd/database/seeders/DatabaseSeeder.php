<?php

namespace Database\Seeders;

use App\Models\course;
use App\Models\courses;
use App\Models\Grade;
use App\Models\Student;
use Database\Factories\GradeFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            //GradeSeeder::class,
            CourseSeeder::class,
            StudentSeeder::class,
        ]);
        //Student::factory()->count(5)->create();
        Grade::factory(5)->create();

    }
}
