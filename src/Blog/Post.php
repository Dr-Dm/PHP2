<?php

namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Person\Person;

class Post
{

    public function __construct(
        private ?UUID $uuid = null,
        private ?UUiD $author_uuid = null,
        private ?string $title = null,
        private ?string $text = null,
    )
    {
    }

    public function __toString()
    {
        return $this->author_uuid . ' пишет: ' . $this->text;
    }

    /**
     * @return UUID|null
     */
    public function getUuid(): ?UUID
    {
        return $this->uuid;
    }

    /**
     * @param UUID|null $uuid
     */
    public function setUuid(?UUID $uuid): void
    {
        $this->uuid = $uuid;
    }

    /**
     * @return UUiD|null
     */
    public function getAuthorUuid(): ?UUiD
    {
        return $this->author_uuid;
    }

    /**
     * @param UUiD|null $author_uuid
     */
    public function setAuthorUuid(?UUiD $author_uuid): void
    {
        $this->author_uuid = $author_uuid;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }


}
