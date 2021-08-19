<?php

namespace App\Containers\BlogsSection\Blogs\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class BlogsRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
