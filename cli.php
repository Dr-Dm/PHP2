<?php

use GeekBrains\LevelTwo\Blog\Commands\Arguments;
use GeekBrains\LevelTwo\Blog\Commands\CreateUserCommand;
use GeekBrains\LevelTwo\Blog\Post;
use GeekBrains\LevelTwo\Blog\Repositories\PostRepository\SqlitePostRepository;
use GeekBrains\LevelTwo\Blog\UUID;

require_once __DIR__ . '/vendor/autoload.php';


    //Создаём объект подключения к SQLite
    $connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');

$faker = Faker\Factory::create();

$postRepository = new SqlitePostRepository($connection);

$post = new Post(
    UUID::random(),
    UUID::random(),
    $faker->realText(rand(20, 30)),
    $faker->realText(rand(200, 300))
);

$postRepository->save($post);


//Создаём объект репозитория
    //$usersRepository = new SqliteUsersRepository($connection);
   // $usersRepository = new InMemoryUsersRepository();

    //$command = new CreateUserCommand($usersRepository);

try {
    //$command->handle(Arguments::fromArgv($argv));

    //$user = $usersRepository->getByUsername('ivan');
   //print $user;
   // $usersRepository->save(new User(UUID::random(), 'admin', new Name('Ivan', 'Nikitin')));
  // echo $usersRepository->getByUsername('admin');
//$usersRepository->save(new User(2, new Name('Anna', 'Petrova')));

} catch (Exception $exception) {
    echo $exception->getMessage();
}
