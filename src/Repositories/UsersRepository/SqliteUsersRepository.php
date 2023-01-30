<?php


namespace Drdm\Dz\Repositories\UsersRepository;

use Drdm\Dz\User;
use \PDO;
use  Drdm\Dz\Person\Name;

class SqliteUsersRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(User $user): void
    {

        $statement = $this->connection->prepare(
            'INSERT INTO users (first_name, last_name) VALUES (:first_name, :last_name)'
        );

        $statement->execute([
            ':first_name' => $user->name()->getFirstName(),
            ':last_name' => $user->name()->getLastName()
        ]);

    }

}