<?php

use Drdm\Dz\Person\Name;
use Drdm\Dz\Repositories\UsersRepository\SqliteUsersRepository;
use Drdm\Dz\User;

require_once __DIR__ . "/vendor/autoload.php";

$connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');

$usersRepository = new SqliteUsersRepository($connection);

$usersRepository->save(new User(1, new Name('Rshdjs', 'sdfkjsksd'), 'admin'));
$usersRepository->save(new User(2, new Name('123123', '765675'), 'nimda'));
