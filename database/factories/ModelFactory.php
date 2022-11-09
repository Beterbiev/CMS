<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Compra::class, static function (Faker\Generator $faker) {
    return [
        'orden_compra' => $faker->randomNumber(5),
        'servicio_solicitado' => $faker->sentence,
        'etapa_venta' => $faker->sentence,
        'tipo_servicio' => $faker->sentence,
        'fecha_solicitud' => $faker->date(),
        'fecha_compromiso' => $faker->date(),
        'monto' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Contacto::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'empresa' => $faker->sentence,
        'correo' => $faker->sentence,
        'telefono' => $faker->sentence,
        'direccion' => $faker->sentence,
        'codigo_postal' => $faker->randomNumber(5),
        'orden_compra' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
