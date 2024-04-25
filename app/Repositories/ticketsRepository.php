<?php

namespace App\Repositories;

use App\Models\tickets;
use App\Repositories\BaseRepository;

/**
 * Class ticketsRepository
 * @package App\Repositories
 * @version April 25, 2024, 2:55 pm UTC
*/

class ticketsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MovieID',
        'CustomerID',
        'ScreeningID',
        'SeatNumber',
        'PurchaseDate'
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
        return tickets::class;
    }
}
