<?php

namespace App\Containers\BlogsSection\User\Tasks;

use App\Containers\BlogsSection\User\Data\Repositories\UserRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllUsersTask extends Task
{
    protected UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
