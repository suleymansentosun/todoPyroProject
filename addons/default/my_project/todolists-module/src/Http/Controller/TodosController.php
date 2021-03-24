<?php namespace MyProject\TodolistsModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use MyProject\TodolistsModule\Todo\Contract\TodoRepositoryInterface;
use MyProject\TodolistsModule\Todo\Todo\TodoTableBuilder;
use MyProject\TodolistsModule\Todo\Todo\TodoFormBuilder;
use Illuminate\Http\Request;


class TodosController extends PublicController
{
    public function index(Request $request, TodoTableBuilder $table)
    {
        $this->breadcrumbs->add('Home', '/');
        $this->breadcrumbs->add('Create', 'todo/create');
        $this->breadcrumbs->add('My Todos', 'todos');

        $this->template->set('meta_title', 'Todos');

        $user_id = auth()->user()->id;

        return $this->view->make(
            'my_project.module.todolists::todos/index',
            compact('user_id')
        );
    }

    public function view(TodoRepositoryInterface $todos, $slug)
    {
        if (!$todo = $todos->findBySlug($slug)) {
            abort(404);
        }

        $this->breadcrumbs->add('Home', '/');
        $this->breadcrumbs->add('Model', '/todos');
        $this->breadcrumbs->add($todo->title, $todo->route('view'));

        $this->template->set('meta_title', $todo->title);

        return $this->view->make(
            'my_project.module.todolists::todos/view',
            compact('todo'), // compact (built-in php method) returns array that contain todo variable value
        );
    }

    public function create(TodoFormBuilder $form) 
    {   
        $this->breadcrumbs->add('Home', '/');
        $this->breadcrumbs->add('Todos', 'todos');

        $this->template->set('meta_title', 'Create a todo!');

        return $form->render();
    }

    public function edit(TodoRepositoryInterface $todos, $id)
    {
        return $this->view->make(
            'my_project.module.todolists::todos/edit',
            compact('id'), // compact (built-in php method) returns array that contain todo variable value
        );
    }

    public function delete(TodoRepositoryInterface $todos, $id)
    {
        $todo = $todos->find($id);
        $todos->delete($todo);

        return $this->view->make(
            'my_project.module.todolists::todos/index',
        );
    }
}