<?php namespace MyProject\TodolistsModule\Todo\Todo;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use MyProject\TodolistsModule\Todo\TodoModel;
use MyProject\TodolistsModule\Todo\TodoRepository;

class TodoFormBuilder extends FormBuilder
{
    protected $model = TodoModel::class;
    
    protected $fields = [
        'categories',
        'title',
        'slug',
        'description',
    ];
    protected $handler = \MyProject\TodolistsModule\Todo\Todo\TodoFormHandler::class;
}