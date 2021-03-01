<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->numberBetween(1,10),
        'photo_id'=> 1,
        'title' => $faker->sentence(7,13),
        'body'=>$faker->paragraph(rand(10,15),true),
        'slug'=>$faker->slug(),
    ];
});
