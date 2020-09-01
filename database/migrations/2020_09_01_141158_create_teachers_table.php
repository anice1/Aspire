<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
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
            $table->integer('user_id')->unsigned();
            // $table->string('firstname');
            // $table->string('lastname');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('dob');
            $table->string('religion');
            // $table->string('email')->unique();
            $table->string('class');
            $table->string('phone');
            $table->text('address');
            $table->string('bio');
            // $table->string('photo');
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
