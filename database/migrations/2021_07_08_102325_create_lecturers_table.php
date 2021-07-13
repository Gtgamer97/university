<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
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
            //additional for lecturers
            $table->string('bank_account_number');
            $table->string('ranks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturers');
    }
}
