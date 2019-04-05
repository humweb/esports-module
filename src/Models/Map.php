<?php namespace Humweb\Esports\Models;

use Humweb\Core\Data\Traits\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

/**
 * Post
 *
 * @package Humweb\Blog\Models
 */
class Map extends Model implements HasMedia
{
    use  HasMediaTrait;

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'maps';

    protected $fillable = [
        'name',
        'game_id',
    ];
}