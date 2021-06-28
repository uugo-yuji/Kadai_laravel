<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        // 'user_id' => function() {
        //     return factory(User::class)->create()->id;
        // },
        'title' => $faker->realText(10),
        'body' => $faker->realText(100),
    ];
});
