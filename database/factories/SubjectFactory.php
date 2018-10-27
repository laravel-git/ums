<?php

use Faker\Generator as Faker;

$factory->define(\App\Subject::class, function (Faker $faker) {
    return [
        'name'=>"Subject"."".$faker->numberBetween(1,30),
        'department_id' =>  $faker->numberBetween(1,20)
    ];
});
