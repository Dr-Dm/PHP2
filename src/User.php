<?php

namespace Drdm\Dz;

use Drdm\Dz\Person\Name;

class User
{
    public function __construct(
        private int $id,
        private Name $name,
        private string $login
    )
    {
    }

    /**
     * @return Name
     */
    public function name(): Name
    {
        return $this->name;
    }

    public function __toString(): string
    {
        $first_name = $this->name->getFirstName();
        $last_mane = $this->name->getLastName();
        return $first_name . " " . $last_mane;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

}