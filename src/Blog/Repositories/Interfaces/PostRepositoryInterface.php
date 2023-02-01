<?php

namespace GeekBrains\LevelTwo\Blog\Repositories\Interfaces;

use GeekBrains\LevelTwo\Blog\Post;
use GeekBrains\LevelTwo\Blog\UUID;

interface PostRepositoryInterface
{
    public function save(Post $post): void;
    public function get(UUID $uuid): Post;
}