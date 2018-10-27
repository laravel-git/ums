<?php

use Faker\Generator as Faker;
use App\Teacher;
$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'father_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'department_id'=>$faker->numberBetween(1,20)
    ];
});
