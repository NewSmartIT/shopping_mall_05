<?php

$factory->define(App\Models\Brand::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->text(20),
    ];
});

$factory->define(App\Models\Customer::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'account' => $faker->name,
        'password' => $password ?: $password = bcrypt('123456'),
        'fullname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender' => $faker->randomElement($array = array ('male', 'female')),
        'address' => $faker->address,
        'job' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'status' => $faker->randomElement($array = array ('1', '2')),
    ];
});

$factory->define(App\Models\Notification::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'comment' => $faker->text(20),
        'user_id' => function () {
            return App\Models\User::pluck('id')
                ->random(1)
                ->first();
        },
    ];
});

$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'brand_id' => function () {
            return App\Models\Brand::pluck('id')
                ->random(1)
                ->first();
        },
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'price' => $faker->numberBetween(1, 10),
        'special' => $faker->randomElement($array = array ('yes', 'no')),
        'description' => $faker->text(20),
        'status' => $faker->text(10),
        'guarantee' => $faker->text(10),
        'promotion' => $faker->text(10),
        'rate' => $faker->numberBetween(1, 5),
        'number_customer' => $faker->numberBetween(1, 10),
    ];
});
