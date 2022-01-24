<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{

    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Email')->unique();
            $table->string('password');
            $table->foreignId('specialization_id')->references('id')->on('specializations')->cascadeOnDelete();
            $table->foreignId('gender_id')->references('id')->on('genders')->cascadeOnDelete();
            $table->date('Joining_Date');
            $table->string('Adress');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
