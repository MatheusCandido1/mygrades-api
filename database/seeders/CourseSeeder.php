<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Software Concepts',
            'code' => 'MIS 740',
        ]);

        Course::create([
            'name' => 'Data Communications and Systems',
            'code' => 'MIS 760',
        ]);

        Course::create([
            'name' => 'System Analysis, Modeling and Design',
            'code' => 'MIS 762',
        ]);

        Course::create([
            'name' => 'Data Management',
            'code' => 'MIS 766',
        ]);

        Course::create([
            'name' => 'Advanced Software Concepts',
            'code' => 'MIS 768',
        ]);

        Course::create([
            'name' => 'Tecnology and Innovation Management',
            'code' => 'MIS 764',
        ]);

        Course::create([
            'name' => 'Leadership, Teams and Individuals',
            'code' => 'MBA 763',
        ]);

        Course::create([
            'name' => 'Information System Strategy',
            'code' => 'MIS 744',
        ]);

        Course::create([
            'name' => 'Business Intelligence',
            'code' => 'MIS 776',
        ]);

        Course::create([
            'name' => 'Data Modeling and Analysis',
            'code' => 'MBA 775',
        ]);

        Course::create([
            'name' => 'Information Systems Project Management',
            'code' => 'MIS 746',
        ]);

        Course::create([
            'name' => 'Client Project',
            'code' => 'MIS 781',
        ]);
    }
}
