<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [ 
        'title' => $faker->company,
        'description_news' => $faker->paragraph(30),
        'author' => 'Joni',
        'id' => '1',
    ];
});
