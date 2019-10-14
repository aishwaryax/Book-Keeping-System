<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('contact');
            $table->text('address');
            $table->Integer('salary');
            $table->string('books_issued');
            $table->enum('role', ['Admin', 'Developer', 'Library staff']);
            $table->Integer('age');
            $table->string('aadhar_card');
            $table->string('email');
            $table->enum('gender', ['male', 'female', 'others']);
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
        Schema::dropIfExists('staff');
    }
}
