<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'job_title' => $faker->jobTitle,
        'owner' => $faker->company,
        'location' => $faker->streetName,
        'category' => $faker->word,
        'job_tag' => $faker->companySuffix,
        'description' => $faker->sentence,
        'contact' =>  $faker->biasedNumberBetween(8,9),
        'closing_date' => $faker->date(),
    ];
});
