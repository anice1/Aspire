<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('school_id')->unsigned();
            $table->string('dob');
            $table->string('gender');
            // $table->integer('class_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('class');
            $table->string('address');
            $table->string('bio');
            $table->string('phone');
            $table->string('guardian');
            $table->string('guardian_phone');
            $table->string('guardian_email');
            $table->string('guardian_occupation');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('profile_image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('student');
    }
}
