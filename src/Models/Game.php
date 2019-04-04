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
class Game extends Model implements HasMedia
{
    use SluggableTrait, HasMediaTrait;

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'games';

    protected $fillable = [
        'name',
        'slug'
    ];


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->slugOptions = [
            'maxlen'     => 200,
            'unique'     => true,
            'slug_field' => 'slug',
            'from_field' => 'name',
        ];
    }
}