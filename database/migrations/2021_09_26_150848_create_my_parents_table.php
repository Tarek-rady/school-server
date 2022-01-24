<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyParentsTable extends Migration
{

    public function up()
    {
        Schema::create('my_parents', function (Blueprint $table) {
            $table->id();
            $table->string('Email');
            $table->string('password');
            $table->string('name_father');
            $table->integer('National_ID_Father');
            $table->integer('Passport_ID_Father');
            $table->integer('Phone_number');
            $table->string('Job_father');
            $table->foreignId('blood_father_id')->references('id')->on('bloods')->cascadeOnDelete();
            $table->foreignId('nationalite_father_id')->references('id')->on('nationalites')->cascadeOnDelete();
            $table->foreignId('religion_father_id')->references('id')->on('religions')->cascadeOnDelete();
            $table->string('name_mother');
            $table->integer('National_ID_mother');
            $table->integer('Passport_ID_mother');
            $table->integer('Phone_number_mother');
            $table->string('Job_mother');
            $table->foreignId('blood_mother_id')->references('id')->on('bloods')->cascadeOnDelete();
            $table->foreignId('nationalite_mother_id')->references('id')->on('nationalites')->cascadeOnDelete();
            $table->foreignId('religion_mother_id')->references('id')->on('religions')->cascadeOnDelete();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('my_parents');
    }
}
