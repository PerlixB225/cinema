<?php

namespace App\Repositories;

use App\Models\customers;
use App\Repositories\BaseRepository;

/**
 * Class customersRepository
 * @package App\Repositories
 * @version April 25, 2024, 2:50 pm UTC
*/

class customersRepository extends BaseRepository
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
        return customers::class;
    }
}
