<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Booking extends Model
{
    public $table = 'booking';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'booking_date',
        'start_time',
        'end_time',
        'member_id',
        'movie_id',
        'seat_number',
        'ticket_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'booking_date' => 'date',
        'member_id' => 'integer',
        'movie_id' => 'integer',
        'seat_number' => 'string',
        'ticket_price' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'booking_date' => 'nullable',
        'start_time' => 'nullable',
        'end_time' => 'nullable',
        'member_id' => 'nullable|integer',
        'movie_id' => 'nullable|integer',
        'seat_number' => 'nullable|string|max:10',
        'ticket_price' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class, 'member_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movie()
    {
        return $this->belongsTo(\App\Models\Movie::class, 'movie_id');
    }

    // Add this line to disable timestamps
    public $timestamps = false;
	
	public function create()
{
    $members = Member::all(); // Assuming you have a Member model

    // Other logic...

    return view('your_view_name', compact('members'));
}
}
