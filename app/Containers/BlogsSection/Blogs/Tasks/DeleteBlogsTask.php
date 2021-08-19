<?php

namespace App\Containers\BlogsSection\Blogs\Tasks;

use App\Containers\BlogsSection\Blogs\Data\Repositories\BlogsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteBlogsTask extends Task
{
    protected BlogsRepository $repository;

    public function __construct(BlogsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
