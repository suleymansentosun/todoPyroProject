<?php namespace MyProject\LibraryModule\Todolist;

use MyProject\LibraryModule\Todolist\Contract\TodolistRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TodolistRepository extends EntryRepository implements TodolistRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TodolistModel
     */
    protected $model;

    /**
     * Create a new TodolistRepository instance.
     *
     * @param TodolistModel $model
     */
    public function __construct(TodolistModel $model)
    {
        $this->model = $model;
    }
}
