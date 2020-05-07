<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Images\UserImage ;
use Faker\Generator as Faker;

$factory->define(UserImage::class, function (Faker $faker) {
    return [

        'name' => 'defaultUserAvatar',
        'description' => 'image par defaut',
        'medium_path' => 'defaultImg/medium/image.png',
        'low_path' => 'defaultImg/low/image.png',
        'path' => 'defaultImg/image.png',
        'avatar_path' => 'defaultImg/avatar/image.png',
        'uploaded_at'=>now()
    ];
});
