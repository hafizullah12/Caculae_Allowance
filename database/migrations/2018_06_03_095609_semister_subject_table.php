<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SemisterSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  Schema::create('semisters', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });

    Schema::create('subjects', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('course_code');
        $table->integer('id_semister')->unsigned();
        $table->foreign('id_semister')->references('id')->on('semisters')->onDelete('cascade');
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
        //
    }
}
