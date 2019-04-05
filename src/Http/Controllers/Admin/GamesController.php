<?php

namespace HUmweb\Esports\Http\Controllers\Admin;

use Humweb\Core\Http\Controllers\AbstractCrudController;
use Humweb\Esports\Models\Game;
use Illuminate\Http\Request;

class GamesController extends AbstractCrudController
{
    /**
     * @var string
     */
    protected $name = 'games';

    /**
     * @var string
     */
    protected $modelName = Game::class;

    /**
     * @var array
     */
    protected $views = [
        'index'  => 'esports::games.index',
        'create' => 'esports::games.create',
        'edit'   => 'esports::games.edit',
    ];

    /**
     * @var array
     */
    protected $validation = [
        'postCreate' => [
            'name'      => 'required',
        ],
        'postEdit'   => [
            'name'      => 'required',
        ]
    ];

//    protected $validationAttributes = [
//        'parent_id' => 'project id'
//    ];

    /**
     * @var array
     */
    protected $dispatchable = [//'postCreate' => CreateArea::class
    ];

    /**
     * @var string
     */
    protected $redirectRoute = 'admin.get.games.index';


    public function beforeGetIndex()
    {
        $this->setTitle('Games');
        $this->crumb('Games', '/admin/games');
    }

    public function beforeGetCreate()
    {
//        $this->beforeGetEdit();
    }


    public function beforeGetEdit()
    {
//        $this->data['projects'] = Project::pluck('name', 'id');
    }


    public function afterPostCreate($game)
    {
        // Attach image
        if (request()->has('image')) {
            $this->addMediaImage($game, 'image');
        }

        // Attach banner
        if (request()->has('banner')) {
            $this->addMediaImage($game, 'banner');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(Request $request)
    {
        $this->data[$this->name] = $this->model->paginate($this->recordPerPage);
        return $this->setContent($this->views['index'], $this->data);
    }


    /**
     * @return array
     */
    public function addMediaImage($game, $type)
    {
        $game->addMediaFromRequest($type)->toMediaCollection($type);
    }
}
