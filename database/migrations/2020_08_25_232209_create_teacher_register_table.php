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
            $table->string('gender');
            $table->date('dob');
            $table->string('blood_group');
            $table->string('religion');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('tclass');
            $table->string('phone');
            $table->string('address');
            $table->text('bio')->nullable();
            $table->string('file')->nullable();
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
