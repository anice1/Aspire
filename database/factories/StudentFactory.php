<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Student;
use App\School;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Student::class, function (Faker $faker) {
    $user = factory(User::class)->create();
    $school = factory(School::class)->create();
    return [
        'user_id' => $user->id,
        'school_id' => $school->id,
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'dob' => date('Y-M-D'),
        'gender' => 'male',
        'class' => 2,
        'address' => $faker->address,
        'bio' => $faker->paragraph,
        'phone' => $faker->phoneNumber,
        'guardian' => $faker->name,
        'guardian_phone' => $faker->phoneNumber,
        'guardian_email' => $faker->email,
        'guardian_occupation' => $faker->title, // password
        $user->assignRole('student'),

    ];
});
