<?php

namespace App\Repositories;

use App\Models\movie;
use App\Repositories\BaseRepository;

/**
 * Class movieRepository
 * @package App\Repositories
 * @version April 28, 2024, 3:37 pm UTC
*/

class movieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'director',
        'release_date',
        'duration_minutes'
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
        return movie::class;
    }
}
