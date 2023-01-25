<?php

namespace Drdm\Dz;

use Drdm\Dz\User;

class Article
{
    private int $userId;

    public function __construct(

        private int $id,
        User $user,
        private string $header,
        private string $text,
    )
    {
        $this->userId = $user->getId();
    }

    public function __toString(): string
    {
        return $this->header . PHP_EOL . $this->text;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
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

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }




}