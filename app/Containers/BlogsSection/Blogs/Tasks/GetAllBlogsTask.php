<?php

namespace App\Containers\BlogsSection\Blogs\Tasks;

use App\Containers\BlogsSection\Blogs\Data\Repositories\BlogsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBlogsTask extends Task
{
    protected BlogsRepository $repository;

    public function __construct(BlogsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
