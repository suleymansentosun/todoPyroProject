<?php namespace MyProject\TodolistsModule\Todo\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

interface TodoRepositoryInterface extends EntryRepositoryInterface
{
    public function findBySlug($slug);
}
