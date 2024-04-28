<?php

namespace App\Repositories;

use App\Models\movierating;
use App\Repositories\BaseRepository;

/**
 * Class movieratingRepository
 * @package App\Repositories
 * @version April 28, 2024, 9:04 pm UTC
*/

class movieratingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rating',
        'comment',
        'movieid'
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
        return movierating::class;
    }
}
