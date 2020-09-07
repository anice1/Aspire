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
            $table->string('profile_image')->nullable();
            $table->unsignedBigInteger('school_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('dob');
            $table->string('gender');
            $table->string('class');
            $table->string('address');
            $table->string('bio');
            $table->string('phone');
            $table->string('guardian');
            $table->string('guardian_phone');
            $table->string('guardian_email');
            $table->string('guardian_occupation');

            
            // Relationships
            $table->foreign('school_id')->references('user_id')->on('school')->onDelete('cascade');
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
