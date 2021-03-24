<?php namespace MyProject\TodolistsModule\Todo\Todo;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use MyProject\TodolistsModule\Todo\TodoModel;
use MyProject\TodolistsModule\Todo\TodoRepository;

class TodoTableBuilder extends TableBuilder
{
    protected $model = TodoModel::class;

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'title'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'title',
        'description'
    ]; 

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit' => [
            'href' => 'todo/edit/{entry.id}'
        ]
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete',
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];
}