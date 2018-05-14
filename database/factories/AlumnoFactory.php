<?php

use Faker\Generator as Faker;

$factory->define(App\Alumno::class, function (Faker $faker) {
    return [
        'rut' => $faker->unique()->randomNumber(9),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'sexo' => $faker->randomElement($array = array ('M','F')),
        'fecha_nac' => $faker->dateTime($max = 'now', $timezone = 'America/Santiago'),
        'direccion' => $faker->streetAddress,
        'actividad' => $faker->sentence(6),
        'telefono' => $faker->tollFreePhoneNumber,
        'fono_emerg' => $faker->tollFreePhoneNumber,
        'email' => $faker->email,
        'apoderado' => $faker->name,
        'fecha_ingreso' => $faker->dateTime($max = 'now', $timezone = 'America/Santiago'),
        'observacion' => $faker->text(50),

    ];
});
