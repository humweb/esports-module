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


    public function getAdminMenu()
    {
        return [
            'E-sports' => [
                [
                    'label'    => 'Games',
                    'url'      => route('admin.get.games.index'),
                    'icon'     => '<i class="fa fa-gamepad"></i>',
                    'children' => [
                        ['label' => 'List', 'url' => route('admin.get.games.create')],
                    ],
                ],
                [
                    'label'    => 'Maps',
                    'url'      => route('admin.get.maps.index'),
                    'icon'     => '<i class="fa fa-map"></i>',
                    'children' => [
                        ['label' => 'List', 'url' => route('admin.get.maps.create')],
                    ],
                ],
            ],
        ];
    }
}
