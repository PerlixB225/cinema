<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class movierating
 * @package App\Models
 * @version April 28, 2024, 9:04 pm UTC
 *
 * @property \App\Models\Movie $movieid
 * @property integer $rating
 * @property string $comment
 * @property integer $movieid
 */
class movierating extends Model
{


    public $table = 'movierating';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'rating',
        'comment',
        'movieid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rating' => 'integer',
        'comment' => 'string',
        'movieid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rating' => 'nullable|integer',
        'comment' => 'nullable|string',
        'movieid' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movieid()
    {
        return $this->belongsTo(\App\Models\Movie::class, 'movieid');
    }
}
