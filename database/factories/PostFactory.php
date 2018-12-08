<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'pending' => true,
        'user_id' => function () {
            return factory(\App\User::class)->create()->id;
        },
        'category_id' => function () {
            return factory(\App\Category::class)->create()->id;
        },
    ];
});