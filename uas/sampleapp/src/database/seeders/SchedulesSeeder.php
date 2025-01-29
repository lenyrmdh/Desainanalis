<?php

namespace Database\Seeders;

use App\Models\Schedules;
use Illuminate\Database\Seeder;

class SchedulesSeeder extends Seeder
{
    public function run()
    {
        Schedules::create([
            'athlete_id' => 1,
            'coach_id' => 1,
            'session_date' => now()->addDays(1),
            'facility' => 'Main Hall',
            'training_type' => 'routine',
            'match_duration' => 60,
            'break_time' => 10,
        ]);
    }
}
