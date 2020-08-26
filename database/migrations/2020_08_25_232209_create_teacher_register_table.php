<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othernames');
            $table->datetime('dob');
            $table->string('gender');
            $table->string('tclass');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('qualification');
            $table->SoftDeletes();
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
        Schema::dropIfExists('teacher');
    }
}
