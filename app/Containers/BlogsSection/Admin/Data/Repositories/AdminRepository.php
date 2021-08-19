<?php

namespace App\Containers\BlogsSection\Admin\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class AdminRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
