<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'points' => '97',
            'term_id' => 1,
            'course_id' => 1,
            'user_id' => 1,
        ]);

        Grade::create([
            'points' => '92',
            'term_id' => 1,
            'course_id' => 2,
            'user_id' => 1,
        ]);

        Grade::create([
            'points' => '90',
            'term_id' => 1,
            'course_id' => 3,
            'user_id' => 1,
        ]);
    }
}
