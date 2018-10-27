<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_user', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('user_id');
          // $table->foreign('teacher_id')->references('id')->on('teachers');
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
        Schema::dropIfExists('teacher_user');
    }
}
