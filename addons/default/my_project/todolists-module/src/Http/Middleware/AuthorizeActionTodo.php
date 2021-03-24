<?php

namespace MyProject\TodolistsModule\Http\Middleware;

use Closure;
use MyProject\TodolistsModule\Todo\Contract\TodoRepositoryInterface;

class AuthorizeActionTodo
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $authenticatedUserId = auth()->user()->id;

        $todoIdToBeActioned = $request->id;

        $todos = app(TodoRepositoryInterface::class);
        $todoToBeActioned = $todos->find($todoIdToBeActioned);
        $authorizedUserId = $todoToBeActioned->users->id;

        if ($authenticatedUserId === $authorizedUserId) {
            return $next($request);
        } else {
            return 'Sorry! You are not authorized for this action.';
        }
    }
}