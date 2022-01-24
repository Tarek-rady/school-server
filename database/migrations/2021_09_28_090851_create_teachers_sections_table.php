<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersSectionsTable extends Migration
{

    public function up()
    {
        Schema::create('teachers_sections', function (Blueprint $table) {

            $table->foreignId('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();
            $table->foreignId('section_id')->references('id')->on('sections')->cascadeOnDelete();

        });
    }


    public function down()
    {
        Schema::dropIfExists('teachers_sections');
    }
}
