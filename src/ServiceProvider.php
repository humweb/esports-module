<?php

namespace Humweb\Esports;

use Humweb\Modules\ModuleBaseProvider;

class ServiceProvider extends ModuleBaseProvider
{

    protected $moduleMeta = [
        'name'    => 'Esports',
        'slug'    => 'esports',
        'version' => '0.0.1',
        'author'  => 'Ryan Shofner',
        'email'   => 'ryun@humboldtweb.com',
        'website' => 'humboldtweb.com',
    ];

    protected $permissions = [

        // Games
        'games.create' => [
            'name'        => 'Create Games',
            'description' => 'Create games.',
        ],
        'games.edit'   => [
            'name'        => 'Edit Games',
            'description' => 'Edit games.',
        ],
        'games.list'   => [
            'name'        => 'List Games',
            'description' => 'List games.',
        ],
        'games.delete' => [
            'name'        => 'Delete Games',
            'description' => 'Delete games.',
        ],
        // Maps
        'maps.create' => [
            'name'        => 'Create Maps',
            'description' => 'Create maps.',
        ],
        'maps.edit'   => [
            'name'        => 'Edit Maps',
            'description' => 'Edit maps.',
        ],
        'maps.list'   => [
            'name'        => 'List Maps',
            'description' => 'List maps.',
        ],
        'maps.delete' => [
            'name'        => 'Delete Maps',
            'description' => 'Delete maps.',
        ],
    ];


    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->app['modules']->put('esports', $this);
        $this->loadViews();
        $this->loadMigrations();
    }


//    public function getAdminMenu()
//    {
//        return [
//            'Content' => [
//                [
//                    'label'    => 'Posts',
//                    'url'      => route('get.admin.blog.posts'),
//                    'icon'     => '<i class="fa fa-book"></i>',
//                    'children' => [
//                        ['label' => 'List', 'url' => route('get.admin.blog.posts')],
//                        ['label' => 'Create', 'url' => route('get.admin.blog.posts.create')],
//                    ],
//                ],
//            ],
//        ];
//    }
}
