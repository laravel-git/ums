<?php

use Faker\Generator as Faker;

$factory->define(\App\Group::class, function (Faker $faker) {
    return [
        'name'=> "group"."".$faker->numberBetween(1,30),
        'faculty_id'=>$faker->numberBetween(1,8)
    ];
});
