<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
	use Searchable;

    protected $table = 'film';
    protected $primaryKey = 'film_id';

    public $timestamps = false;

    public function actors()
    {
    	return $this->belongsToMany(Actor::class, 'film_actor');
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    // public function toSearchableArray()
    // {
    //     return [
    //     	'title' => $this->title
    //     ];
    // }
}
