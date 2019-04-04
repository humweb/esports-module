<?php

namespace HUmweb\Esports\Http\Controllers\Admin;

use Humweb\Core\Http\Controllers\AbstractCrudController;
use Humweb\Esports\Models\Game;
use Humweb\Esports\Models\Map;
use Illuminate\Http\Request;

class MapsController extends AbstractCrudController
{
    /**
     * @var string
     */
    protected $name = 'maps';

    /**
     * @var string
     */
    protected $modelName = Map::class;

    /**
     * @var array
     */
    protected $views = [
        'index'  => 'esports::maps.index',
        'create' => 'esports::maps.create',
        'edit'   => 'esports::maps.edit',
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
    protected $redirectRoute = 'admin.get.maps.index';


    public function beforeGetCreate()
    {
        $this->beforeGetEdit();
    }


    public function beforeGetEdit()
    {
        $this->data['games'] = Game::pluck('name', 'id');
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
