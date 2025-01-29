<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'age', 'gender', 'skill_level', 'training_history', 'competition_evaluation',
    ];

// Relasi ke model User
public function user()
{
    return $this->belongsTo(User::class);
}
}