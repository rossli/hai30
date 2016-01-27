<?php

/*
|--------------------------------------------------------------------------
| Model Factories   这个是默认的 以这个为主吧
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->name,
        'email' => $faker->email,
        'is_admin' => $faker->randomElement(['Y','N']),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//定义一个 Test模型表的 自动填充数据的工厂
$factory->define(App\Test::class, function (Faker\Generator $faker) {
    return [
        'testname' => $faker->word(),
        'description' => $faker->sentence(5),
    ];
});

//定义一个  Country 模型表的 自动填充数据的工厂
$factory->define(App\Country::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'from' => $faker->sentence(5),
        'content'=>$faker->sentence(10),
    ];
});

//定义一个  Lessons 模型表的 自动填充数据的工厂
$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'intro' => $faker->paragraph,
        'image'=>$faker->imageUrl(),
        'published_at'=>$faker->dateTime,
    ];
});


