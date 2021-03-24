<?php namespace MyProject\LibraryModule\Http\Controller\Admin;

use MyProject\LibraryModule\Todolist\Form\TodolistFormBuilder;
use MyProject\LibraryModule\Todolist\Table\TodolistTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TodolistsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TodolistTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TodolistTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TodolistFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TodolistFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TodolistFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TodolistFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
