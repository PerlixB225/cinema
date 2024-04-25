<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class customers
 * @package App\Models
 * @version April 25, 2024, 2:50 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $tickets
 * @property string $Firstname
 * @property string $Surname
 * @property string $Phone
 * @property integer $Age
 */
class customers extends Model
{


    public $table = 'customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'Firstname',
        'Surname',
        'Phone',
        'Age'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Firstname' => 'string',
        'Surname' => 'string',
        'Phone' => 'string',
        'Age' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Firstname' => 'nullable|string|max:30',
        'Surname' => 'nullable|string|max:30',
        'Phone' => 'nullable|string|max:15',
        'Age' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tickets()
    {
        return $this->hasMany(\App\Models\Ticket::class, 'CustomerID');
    }
}
