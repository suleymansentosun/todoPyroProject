<?php namespace MyProject\TodolistsModule\Todo\Form;

use Illuminate\Support\Facades\Auth;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;


class TodoFormHandler
{
    public function handle(
        FormBuilder $builder)
    {
        if (!$builder->canSave()) {
            return;
        }

        $builder->saveForm();

        $entry = $builder->getFormEntry();

        $entry->users_id = Auth::id();

        $entry->save();
    }
}