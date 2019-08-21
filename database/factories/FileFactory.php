<?php

$factory->define(\App\File::class, function (Faker $faker) {
    return [
        'document_id' => function () {
            return factory(\App\Document::class)->create()->id;
        },
        'file' => $faker->filename,
    ];
});
