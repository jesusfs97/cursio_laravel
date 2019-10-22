<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $imagenes = [
        'featured_1.png',
        'featured_2.png',
        'featured_3.png',
        'featured_4.png',
        'featured_5.png',
        'featured_6.png',
        'featured_7.png',
        'featured_8.png',
    ];

    
    return [
        'categoria_id' => $faker->numberBetween($min = 1, $max = 3),
        'marca_id' => $faker->numberBetween($min = 1, $max = 3),
        'nombre' => $faker->word,
        'url' => $faker->word,
        'descripcion' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'precio' => $faker->numberBetween($min = 1, $max = 20),
        'contenido' => $faker->realText($faker->numberBetween(10,20)),
        'imagen' => $faker->randomElement($array = $imagenes),
    ];
});
