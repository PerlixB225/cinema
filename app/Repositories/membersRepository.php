<?php

namespace App\Repositories;

use App\Models\members;
use App\Repositories\BaseRepository;

/**
 * Class membersRepository
 * @package App\Repositories
 * @version April 25, 2024, 5:29 pm UTC
*/

class membersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Firstname',
        'Surname',
        'Phone',
        'Age'
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
        return members::class;
    }
}
