<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('semester_1')->nullable();
            $table->integer('semester_2')->nullable();
            $table->integer('semester_3')->nullable();
            $table->integer('semester_4')->nullable();
            $table->integer('semester_5')->nullable();
            $table->integer('semester_6')->nullable();
            $table->integer('semester_7')->nullable();
            $table->integer('semester_8')->nullable();
            $table->string('type')->nullable();
            $table->integer('prediction')->nullable();
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
        Schema::dropIfExists('graduations');
    }
}
