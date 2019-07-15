<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(2000),
        'excerpt' => $faker->text(200),
        'file' => $faker->imageUrl($width = 1920, $height = 1280),
        'status'=> $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
