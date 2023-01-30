<?php


namespace Drdm\Dz\Person;


class Name
{
    public function __construct
    (
        private string $first_name,
        private string $last_name
    )
    {
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }


    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }


}