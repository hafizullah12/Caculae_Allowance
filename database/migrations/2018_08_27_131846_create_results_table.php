<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id');
            $table->string('id_semister');
            $table->string('id_subject');
            $table->string('name');
            $table->string('designation');
            $table->integer('ct_1');
            $table->integer('ct_2');
            $table->integer('ct_3');
            $table->integer('question');
            $table->integer('final_student');
            $table->string('exam_committee');
            $table->integer('tabulation');
            $table->integer('presentation');
            $table->integer('evalution');
            $table->string('sercetizing_sub_1');
            $table->integer('sercetizing_student_1');
            $table->string('sercetizing_sub_2');
            $table->integer('sercetizing_student_2');
            $table->string('sercetizing_sub_3');
            $table->integer('sercetizing_student_3');
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
        Schema::dropIfExists('results');
    }
}
