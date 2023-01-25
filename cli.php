<?php
require_once __DIR__ . "/vendor/autoload.php";

use Drdm\Dz\{User, Article, Comment};

$faker = Faker\Factory::create();

if (empty($argv[1])){
    die();
}

switch ($argv[1]) {
    case "user":
        $id = (int)$faker->uuid();
        $name = $faker->firstName();
        $secondName = $faker->lastName();
        echo new User($id, $name, $secondName);
        break;

    case "post":
        $name = $faker->firstName();
        $secondName = $faker->lastName();

        $id = (int)$faker->uuid();
        $header = $faker->title();
        $text = $faker->text();

        echo new Article($id, new User($id, $name, $secondName), $header, $text);
        break;

    case "comment":
        $name = $faker->firstName();
        $secondName = $faker->lastName();
        $header = $faker->title();
        $text = $faker->text();

        $id = (int)$faker->uuid();
        $comment = $faker->text();

        echo new Comment($id, $user = new User($id, $name, $secondName), new Article($id, $user, $header, $text), $comment);
        break

    default: die();
}