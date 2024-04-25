<?php

namespace App\Repositories;

use App\Models\screenings;
use App\Repositories\BaseRepository;

/**
 * Class screeningsRepository
 * @package App\Repositories
 * @version April 25, 2024, 2:55 pm UTC
*/

class screeningsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ScreenNumber'
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
        return screenings::class;
    }
}
