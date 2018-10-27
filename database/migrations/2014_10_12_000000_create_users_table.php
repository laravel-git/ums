<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('father_name');
            $table->string('passport');
            $table->unsignedInteger('faculty_id')->default(1);
            //$table->foreign('faculty_id')->references('id')->on('faculties');
            $table->unsignedInteger('group_id')->default(1);
           // $table->foreign('group_id')->references('id')->on('groups');
            $table->string('cert_numb');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
