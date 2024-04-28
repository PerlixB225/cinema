<?php

namespace App\Repositories;

use App\Models\booking;
use App\Repositories\BaseRepository;

/**
 * Class bookingRepository
 * @package App\Repositories
 * @version April 28, 2024, 3:37 pm UTC
*/

class bookingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'booking_date',
        'start_time',
        'end_time',
        'member_id',
        'movie_id',
        'seat_number',
        'ticket_price'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return booking::class;
    }
}
