<?php

namespace Database\Seeders;

use App\Models\Athlete;
use Illuminate\Database\Seeder;

class AthleteSeeder extends Seeder
{
    public function run()
    {
        Athlete::create([
            'name' => 'John Doe',
            'age' => 25,
            'gender' => 'male',
            'skill_level' => 'beginner',
            'training_history' => 'Trained in local club',
            'competition_evaluation' => 'First place in regional championship',
        ]);
    }
}
