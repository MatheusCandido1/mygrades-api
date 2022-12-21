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

        Grade::create([
            'points' => '90',
            'term_id' => 2,
            'course_id' => 11,
            'user_id' => 1,
        ]);

        Grade::create([
            'points' => '98',
            'term_id' => 3,
            'course_id' => 4,
            'user_id' => 1,
        ]);

        Grade::create([
            'points' => '98',
            'term_id' => 3,
            'course_id' => 5,
            'user_id' => 1,
        ]);

        Grade::create([
            'points' => '95',
            'term_id' => 3,
            'course_id' => 6,
            'user_id' => 1,
        ]);

        Grade::create([
            'points' => '87',
            'term_id' => 4,
            'course_id' => 7,
            'user_id' => 1,
        ]);

        Grade::create([
            'points' => '95',
            'term_id' => 4,
            'course_id' => 8,
            'user_id' => 1,
        ]);

        Grade::create([
            'points' => '100',
            'term_id' => 4,
            'course_id' => 9,
            'user_id' => 1,
        ]);
    }
}
