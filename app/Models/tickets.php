<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class tickets
 * @package App\Models
 * @version April 25, 2024, 2:55 pm UTC
 *
 * @property \App\Models\Movie $movieid
 * @property \App\Models\Customer $customerid
 * @property \App\Models\Screening $screeningid
 * @property integer $MovieID
 * @property integer $CustomerID
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
        'CustomerID',
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
        'CustomerID' => 'integer',
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
        'CustomerID' => 'nullable|integer',
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
    public function customerid()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'CustomerID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function screeningid()
    {
        return $this->belongsTo(\App\Models\Screening::class, 'ScreeningID');
    }
}
