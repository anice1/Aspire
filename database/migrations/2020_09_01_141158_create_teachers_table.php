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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('school_id');
            
            // Relationships
            $table->foreign('school_id')->references('id')->on('school')->onDelete('cascade');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('dob');
            $table->string('religion');
            $table->string('class');
            $table->string('phone');
            $table->text('address');
            $table->text('bio');
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
