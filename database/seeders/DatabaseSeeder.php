<?php

namespace Database\Seeders;

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
        $this->call([
            TermSeeder::class,
            CourseSeeder::class,
            UserSeeder::class,
            GradeSeeder::class,
        ]);
    }
}
