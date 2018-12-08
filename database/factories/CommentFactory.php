<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'comment' => $faker->paragraph,
        'post_id' => function () {
            return factory(\App\Post::class)->create()->id;
        },
        'user_id' => function () {
            return factory(\App\User::class)->create()->id;
        },
    ];
});