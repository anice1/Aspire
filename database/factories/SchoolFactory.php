<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use App\User;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    $user = factory(User::class)->create();
    return [
        'user_id' => $user->id,
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'school_name' => $faker->name,
        'dob' => date('Y-M-D'),
        'phone' => $faker->phoneNumber,
        'school_address' => $faker->address,
        'gender' => 'male',
        'owner_address' => $faker->address,
        'bio' => $faker->paragraph,
        $user->assignRole('school'),

    ];

});
