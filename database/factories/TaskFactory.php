<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Task::class , function(Faker $faker)
{
    return [
        'title'        => $faker->title ,
        'description' => $faker->text ,
        'status'      => 'open' ,
        'user_id'     => factory(User::class,1)->create()->first()->id,
    ];
});
