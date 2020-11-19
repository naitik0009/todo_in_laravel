<?php

use Faker\Generator as Faker;

$factory->define(App\notes::class, function (Faker $faker) {
    return [
        //
        'task'=>'rohan',
        'des'=>'hahahaha',
        'completion'=>true
    ];
});
