<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPositionIdToTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->unsignedInteger('position_id');
            $table->unsignedInteger('faculty_id');
            //$table->foreign('position_id')->references('id')->on('positions');
            //$table->foreign('faculty_id')->references('id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            //
        });
    }
}
