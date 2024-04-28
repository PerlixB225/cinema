<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Member extends Model
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

    // Add this line to disable timestamps
    public $timestamps = false;

    public function __toString()
    {
        return  $this->firstname . " " . $this->surname;
    }
}
