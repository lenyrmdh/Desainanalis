<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthletesTable extends Migration
{
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->enum('gender', ['male', 'female']);
            $table->enum('skill_level', ['beginner', 'intermediate', 'advanced']);
            $table->text('training_history');
            $table->text('competition_evaluation');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('athletes');
    }
}

