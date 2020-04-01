<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [

      'name' => $faker -> firstName,
      'lastname' => $faker -> lastName,
      'birth_year' => $faker -> year
    ];
});
