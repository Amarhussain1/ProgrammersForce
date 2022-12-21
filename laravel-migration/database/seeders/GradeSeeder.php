<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++)
        {
            DB::table('grades')->insert(

                ['grade' => Str::random(5),
                  'created_at'=> date('Y-m-d H:i:s'),
                  'updated_at'=> date('Y-m-d H:i:s'),
                ]
            );

        }

    }
}
