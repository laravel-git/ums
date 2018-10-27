<?php

use Faker\Generator as Faker;

$factory->define(\App\News::class, function (Faker $faker) {
    return [
        'title'=>$faker->text(30),
        'body'=>$faker->text(300)
    ];
});
