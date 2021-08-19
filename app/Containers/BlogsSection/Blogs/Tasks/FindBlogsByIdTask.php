<?php

namespace App\Containers\BlogsSection\Blogs\Tasks;

use App\Containers\BlogsSection\Blogs\Data\Repositories\BlogsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBlogsByIdTask extends Task
{
    protected BlogsRepository $repository;

    public function __construct(BlogsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
