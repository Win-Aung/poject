<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' =>$faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'image' => 'http://via.placeholder.com/150x150',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(App\category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        
    ];
});
$factory->define(App\tag::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        
    ];
});
// $factory->define(App\posts::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'title' => $faker->title,
//         'subtitle' => $faker->subtitle,
//         'slug' => $faker->slub,
//         'status' => $faker->status,
//         'posted_by' => $faker->posted_by,
//         'image' => $faker->image,
//         'tag' =>$faker->tag,
//         'category' => $faker->category,
//         'like' => $faker->like,
//         'dislike' => $faker->dislike,
        
//     ];
// });


// $factory->define(App\Message::class, function (Faker $faker) {
//     do {
//         $from = rand(1, 15);
//         $to = rand(1, 15);
//     } while ($from === $to);

//     return [
//         'from' => $from,
//         'to' => $to,
//         'text' => $faker->sentence
//     ];
// });
