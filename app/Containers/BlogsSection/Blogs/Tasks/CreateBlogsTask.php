<?php

namespace App\Containers\BlogsSection\Blogs\Tasks;

use App\Containers\BlogsSection\Blogs\Data\Repositories\BlogsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBlogsTask extends Task
{
    protected BlogsRepository $repository;

    public function __construct(BlogsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
