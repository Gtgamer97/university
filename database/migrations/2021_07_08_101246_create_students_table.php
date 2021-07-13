<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('major_id');
            $table->foreign('major_id')->references('id')->on('majors');
            //$table->foreignId('major_id')->constrained('majors');
            $table->string('name');
            $table->string('surname');
            $table->string('personal_id')->unique();
            $table->string('phone_number', 9)->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('sex');
            $table->string('address_two')->nullable();
            $table->string('number_of_apartment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
