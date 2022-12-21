<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Term;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::create([
            'name' => 'Fall 2022',
            'start_date' => '2022-08-28',
            'end_date' => '2022-12-20',
            'status' => 2
        ]);

        Term::create([
            'name' => 'Summer 2023',
            'start_date' => '2023-06-17',
            'end_date' => '2023-07-11',
            'status' => 1
        ]);

        Term::create([
            'name' => 'Spring 2023',
            'start_date' => '2022-01-17',
            'end_date' => '2022-12-20',
            'status' => 1
        ]);

        Term::create([
            'name' => 'Fall 2023',
            'start_date' => '2022-08-28',
            'end_date' => '2022-12-16',
            'status' => 0
        ]);

        Term::create([
            'name' => 'Spring 2024',
            'start_date' => '2022-01-16',
            'end_date' => '2022-05-11',
            'status' => 0
        ]);
    }
}
