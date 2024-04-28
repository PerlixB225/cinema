<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class movie
 * @package App\Models
 * @version April 28, 2024, 3:37 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $bookings
 * @property string $title
 * @property string $director
 * @property string $release_date
 * @property integer $duration_minutes
 */
class movie extends Model
{


    public $table = 'movie';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'title',
        'director',
        'release_date',
        'duration_minutes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'director' => 'string',
        'release_date' => 'date',
        'duration_minutes' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'nullable|string|max:100',
        'director' => 'nullable|string|max:100',
        'release_date' => 'nullable',
        'duration_minutes' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'movie_id');
    }
	
	
	public function __toString()
	{
	return  $this->title;
	}
	
}
