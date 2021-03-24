<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use MyProject\TodolistsModule\Category\CategoryModel;

class MyProjectModuleTodolistsCreateTodolistsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'title' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
        ],
        'description' => 'anomaly.field_type.textarea',
        'categories' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'title_name' => 'name',
                'related' => CategoryModel::class
            ]            
        ],
        'users' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => '\Anomaly\UsersModule\User\UserModel',
                'mode' => 'dropdown',
                'title_name' => 'id'
            ]
        ]
    ];

}
