<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 8; $i++) {
            DB::table('students')->insert([
                'student_name' => Str::random(5),
                'email' => Str::random(5),
                'age' => Str::random(5),
                'gender' => Str::random(5),
                'course_id' => rand(1,2),
                'grade_id' => rand(1,3),
                'course' => Str::random(5),
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')

                ]
            );
        }
    }
}
