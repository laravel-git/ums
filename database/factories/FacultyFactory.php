<?php

use Faker\Generator as Faker;

$factory->define(\App\Faculty::class, function (Faker $faker) {
    return [
        'name'=> "Faculty"."".$faker->numberBetween(1,8)
    ];
});
