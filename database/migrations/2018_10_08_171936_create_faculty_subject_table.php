<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultySubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_subject', function (Blueprint $table) {
            $table->engine = "InnoDB";
           $table->unsignedInteger('faculty_id');
           $table->unsignedInteger('subject_id');
         //$table->foreign('faculty_id')->references('id')->on('faculties');
           //$table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty_subject');
    }
}
