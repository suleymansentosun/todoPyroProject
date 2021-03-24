<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class MyProjectModuleTodolistsCreateTodosStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'todos',
        'title_column' => 'title',
        'translatable' => true,
        'versionable' => false,
        'trashable' => true,
        'searchable' => true,
        'sortable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'categories' => [
            'required' => 'true'
        ],
        'title' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
            'config' => [
                'slugify' => 'title'
            ]            
        ],
        'description' => [
            'required' => true,
            'translatable' => true
        ],
        'users' => [
            'required' => true,
        ]
    ];
}
