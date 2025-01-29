<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'athlete_id', 'coach_id', 'session_date', 'facility', 'training_type', 'match_duration', 'break_time',
    ];

    public function athlete()
    {
        return $this->belongsTo(Athlete::class);
    }

    public function coach()
    {
        return $this->belongsTo(Coaches::class);
    }
}
