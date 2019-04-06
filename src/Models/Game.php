<?php namespace Humweb\Esports\Models;

use Humweb\Core\Data\Traits\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

/**
 * Post
 *
 * @package Humweb\Blog\Models
 */
class Game extends Model implements HasMedia, HasMediaConversions
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


    /**
     * @param  \Spatie\MediaLibrary\Media|null  $media
     *
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('xs')
             ->width(25)
             ->height(25)
             ->performOnCollections('image');

        $this->addMediaConversion('sm')
             ->width(40)
             ->height(40)
             ->performOnCollections('image');

        $this->addMediaConversion('sm')
             ->width(50)
             ->height(50)
             ->performOnCollections('image');

        $this->addMediaConversion('sm')
             ->width(100)
             ->height(100)
             ->performOnCollections('image');
    }
}