<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Email')->unique();
            $table->string('password');
            $table->foreignId('gender_id')->references('id')->on('genders')->cascadeOnDelete();
            $table->foreignId('nationalite_id')->references('id')->on('nationalites')->cascadeOnDelete();
            $table->foreignId('blood_id')->references('id')->on('bloods')->cascadeOnDelete();
            $table->date('Date_birth');
            $table->foreignId('grade_id')->references('id')->on('grades')->cascadeOnDelete();
            $table->foreignId('classroom_id')->references('id')->on('classrooms')->cascadeOnDelete();
            $table->foreignId('section_id')->references('id')->on('sections')->cascadeOnDelete();
            $table->foreignId('parent_id')->references('id')->on('my_parents')->cascadeOnDelete();
            $table->string('academic_year');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
}
