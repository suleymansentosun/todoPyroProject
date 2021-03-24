<?php namespace MyProject\LibraryModule\Todolist;

use MyProject\LibraryModule\Todolist\Contract\TodolistInterface;
use Anomaly\Streams\Platform\Model\Library\LibraryTodolistsEntryModel;

class TodolistModel extends LibraryTodolistsEntryModel implements TodolistInterface
{

}
