<?php

use Faker\Generator as Faker;

$factory->define(\App\Department::class, function (Faker $faker) {
    $i =1;
    return [
        'name'=>"Department"."".$i,
        'faculty_id' =>$faker->numberBetween(1,10)
    ];
    $i ++;
});
