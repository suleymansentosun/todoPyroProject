<?php namespace MyProject\TodolistsModule\Todo;

use MyProject\TodolistsModule\Todo\Contract\TodoInterface;
use Anomaly\Streams\Platform\Model\Todolists\TodolistsTodosEntryModel;

class TodoModel extends TodolistsTodosEntryModel implements TodoInterface
{

}
