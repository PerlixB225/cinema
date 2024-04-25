<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class screenings
 * @package App\Models
 * @version April 25, 2024, 6:16 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $tickets
 * @property string $ScreenNumber
 */
class screenings extends Model
{


    public $table = 'screenings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'ScreenNumber'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ScreenNumber' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ScreenNumber' => 'nullable|string'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tickets()
    {
        return $this->hasMany(\App\Models\Ticket::class, 'ScreeningID');
    }
}
