<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Matheus Carvalho',
            'email' => 'matheus@unlv.edu',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'name' => 'Raheem',
            'email' => 'raheem@unlv.edu',
            'password' => bcrypt('secret'),
        ]);
    }
}
