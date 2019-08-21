<?php

$factory->define(\App\Tag::class, function (Faker $faker) {
    return [
        'tag' => $faker->word,
    ];
});
