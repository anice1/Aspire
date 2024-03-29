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
            $table->unsignedBigInteger('school_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('dob');
            $table->string('gender');
            // $table->integer('class_id')->unsigned();
            $table->string('class');
            $table->text('address');
            $table->text('bio');
            $table->string('phone');
            $table->string('guardian');
            $table->string('guardian_phone');
            $table->string('guardian_email');
            $table->string('guardian_occupation');
            $table->string('profile_image')->nullable();
            // Relationships
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
