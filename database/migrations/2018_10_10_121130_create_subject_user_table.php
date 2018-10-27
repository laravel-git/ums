<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_user', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('user_id');
            //$table->foreign('subject_id')->references('id')->on('subjects');
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_user');
    }
}
