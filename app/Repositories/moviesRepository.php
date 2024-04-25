<?php

namespace App\Repositories;

use App\Models\movies;
use App\Repositories\BaseRepository;

/**
 * Class moviesRepository
 * @package App\Repositories
 * @version April 25, 2024, 6:16 pm UTC
*/

class moviesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Title',
        'Genre',
        'ReleaseDate',
        'Duration'
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
        return movies::class;
    }
}
