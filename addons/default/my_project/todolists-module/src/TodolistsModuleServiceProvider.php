<?php namespace MyProject\TodolistsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;
use MyProject\TodolistsModule\Todo\Contract\TodoRepositoryInterface;
use Anomaly\Streams\Platform\Model\Todolists\TodolistsTodosEntryModel;
use MyProject\TodolistsModule\Todo\Contract\TodoInterface;
use MyProject\TodolistsModule\Todo\TodoModel;
use MyProject\TodolistsModule\Todo\TodoRepository;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class TodolistsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [        
        'todos'           => [
            'uses' => 'MyProject\TodolistsModule\Http\Controller\TodosController@index',
            'as' => 'my_project.module.todolists::todos.index',
        ],
        'todos/{slug}' => [            
            'uses' => 'MyProject\TodolistsModule\Http\Controller\TodosController@view',
            'as' => 'my_project.module.todolists::todos.view',
        ],
        'todo/create' => [
            'uses' => 'MyProject\TodolistsModule\Http\Controller\TodosController@create',
            'as' => 'my_project.module.todolists::todos.create'
        ],
        'todo/edit/{id}' => [
            'uses' => 'MyProject\TodolistsModule\Http\Controller\TodosController@edit',
            'as' => 'my_project.module.todolists::todos.edit',
            'middleware' => [
                \MyProject\TodolistsModule\Http\Middleware\AuthorizeActionTodo::class
            ],
        ],
        'todo/delete/{id}' => [
            'uses' => 'MyProject\TodolistsModule\Http\Controller\TodosController@delete',
            'as' => 'my_project.module.todolists::todos.delete',
            'middleware' => [
                \MyProject\TodolistsModule\Http\Middleware\AuthorizeActionTodo::class
            ],
        ],
        'admin/todolists/categories'           => 'MyProject\TodolistsModule\Http\Controller\Admin\CategoriesController@index',
        'admin/todolists/categories/create'    => 'MyProject\TodolistsModule\Http\Controller\Admin\CategoriesController@create',
        'admin/todolists/categories/edit/{id}' => 'MyProject\TodolistsModule\Http\Controller\Admin\CategoriesController@edit',
        'admin/todolists'           => 'MyProject\TodolistsModule\Http\Controller\Admin\TodosController@index',
        'admin/todolists/create'    => 'MyProject\TodolistsModule\Http\Controller\Admin\TodosController@create',
        'admin/todolists/edit/{id}' => 'MyProject\TodolistsModule\Http\Controller\Admin\TodosController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //MyProject\TodolistsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    MyProject\TodolistsModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //MyProject\TodolistsModule\Event\ExampleEvent::class => [
        //    MyProject\TodolistsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => MyProject\TodolistsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        TodolistsCategoriesEntryModel::class => CategoryModel::class,
        TodolistsTodosEntryModel::class => TodoModel::class,
        'todo_create_form' => \MyProject\TodolistsModule\Todo\Todo\TodoFormBuilder::class,
        'todo_index_table' => \MyProject\TodolistsModule\Todo\Todo\TodoTableBuilder::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        CategoryRepositoryInterface::class => CategoryRepository::class,
        TodoRepositoryInterface::class => TodoRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
