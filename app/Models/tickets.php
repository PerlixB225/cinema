<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class tickets
 * @package App\Models
 * @version April 25, 2024, 6:16 pm UTC
 *
 * @property \App\Models\Movie $movieid
 * @property \App\Models\Member $memberid
 * @property \App\Models\Screening $screeningid
 * @property integer $MovieID
 * @property integer $MemberID
 * @property integer $ScreeningID
 * @property string $SeatNumber
 * @property string $PurchaseDate
 */
class tickets extends Model
{


    public $table = 'tickets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MovieID',
        'MemberID',
        'ScreeningID',
        'SeatNumber',
        'PurchaseDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MovieID' => 'integer',
        'MemberID' => 'integer',
        'ScreeningID' => 'integer',
        'SeatNumber' => 'string',
        'PurchaseDate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MovieID' => 'nullable|integer',
        'MemberID' => 'nullable|integer',
        'ScreeningID' => 'nullable|integer',
        'SeatNumber' => 'nullable|string',
        'PurchaseDate' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movieid()
    {
        return $this->belongsTo(\App\Models\Movie::class, 'MovieID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function memberid()
    {
        return $this->belongsTo(\App\Models\Member::class, 'MemberID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function screeningid()
    {
        return $this->belongsTo(\App\Models\Screening::class, 'ScreeningID');
    }
}
