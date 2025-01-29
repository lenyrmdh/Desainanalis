<?php

namespace Database\Seeders;

use App\Models\Coaches;
use Illuminate\Database\Seeder;

class CoachesSeeder extends Seeder
{
    public function run()
    {
        Coaches::create([
            'name' => 'Jane Smith',
            'qualification' => 'Bachelor in Sports Science',
            'experience' => '5 years of coaching billiard players',
        ]);
    }
}
