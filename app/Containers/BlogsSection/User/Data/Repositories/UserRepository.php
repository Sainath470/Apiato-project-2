<?php

namespace App\Containers\BlogsSection\User\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class UserRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
