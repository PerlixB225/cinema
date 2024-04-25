<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class movies
 * @package App\Models
 * @version April 25, 2024, 2:55 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $tickets
 * @property string $Title
 * @property string $Genre
 * @property string $ReleaseDate
 * @property string $Duration
 */
class movies extends Model
{


    public $table = 'movies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'Title',
        'Genre',
        'ReleaseDate',
        'Duration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Title' => 'string',
        'Genre' => 'string',
        'ReleaseDate' => 'date',
        'Duration' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Title' => 'nullable|string',
        'Genre' => 'nullable|string',
        'ReleaseDate' => 'nullable',
        'Duration' => 'nullable|string'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tickets()
    {
        return $this->hasMany(\App\Models\Ticket::class, 'MovieID');
    }
}
