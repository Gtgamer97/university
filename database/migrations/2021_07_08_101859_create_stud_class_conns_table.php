<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudClassConnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_class_conns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            //$table->foreignId('student_id')->constrained('students');
            $table->unsignedBigInteger('uniclass_id');
            $table->foreign('uniclass_id')->references('id')->on('uniclasses');
            //$table->foreignId('uniclass_id')->constrained('uniclasses');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stud_class_conns');
    }
}
