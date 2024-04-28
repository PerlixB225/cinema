<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class member
 * @package App\Models
 * @version April 27, 2024, 11:19 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $bookings
 * @property string $firstname
 * @property string $surname
 * @property string $email
 * @property string $phone
 */
class member extends Model
{


    public $table = 'member';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'email',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'email' => 'nullable|string|max:50',
        'phone' => 'nullable|string|max:15'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'member_id');
    }
	
	
	public function __toString()
	{
	return  $this->firstname . " " . $this->surname;
	}
}
