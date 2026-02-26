<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';


$faker = Faker\Factory::create();

$user = new stdClass();
$user->name = $faker->name;       
$user->email = $faker->safeEmail;   
$user->age = $faker->numberBetween(12, 99);
$user->thought = $faker->sentence;     

var_dump($user);
