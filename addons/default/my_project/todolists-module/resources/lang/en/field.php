<?php

return [
    'name' => [
        'name' => 'Name',
        'label' => 'Name',
        'instructions' => 'Please input name of the category',
        'warning' => 'You must fill the input with the name of category'
    ],
    'description' => [
        'name' => 'Description',
        'label' => 'Description',
        'instructions' => [
            'todolists' => 'Please tell us details of your todo action',
            'categories' => 'Please give us more information about what jobs category includes'
        ],
        'warning' => [
            'todolists' => 'All todo must have explanation in a detail',
            'categories' => 'All category must have explanation in a detail'
        ],
    ],
    'title' => [
        'name' => 'Title',
        'label' => 'Title',
        'instructions' => 'Please select brief title for your todo action',
        'warning' => 'All todo must have a brief title'
    ],
    'deadline' => [
        'name' => 'Deadline',
        'label' => 'Deadline',
        'instructions' => 'Please pick a deadline date for your todo',
        'warning' => 'All todo must have deadline date'
    ],
    'categories' => [
        'name' => 'Categories',
        'label' => 'Categories',
        'instructions' => 'Please select one or more category type for your todo',
        'warning' => 'All todo must belongs to at least one category'
    ],
    'slug' => [
        'name' => 'Slug'
    ],
    'users_id' => [
        'name' => 'User',
        'label' => 'User',
    ],
];
