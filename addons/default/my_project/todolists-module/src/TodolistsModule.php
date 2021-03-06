<?php namespace MyProject\TodolistsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class TodolistsModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'todos' => [
            'buttons' => [
                'new_todo',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
    ];
}
