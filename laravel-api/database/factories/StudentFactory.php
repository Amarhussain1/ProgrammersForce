<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'age'=>fake()->name(),
            'gender'=>fake()->name(),
            'course_id'=>rand(1,2),
            'grade_id'=>rand(1,3),
            'course'=>fake()->name(),
        ];
    }
}
