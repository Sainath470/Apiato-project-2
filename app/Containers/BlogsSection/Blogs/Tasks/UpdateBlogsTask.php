<?php

namespace App\Containers\BlogsSection\Blogs\Tasks;

use App\Containers\BlogsSection\Blogs\Data\Repositories\BlogsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateBlogsTask extends Task
{
    protected BlogsRepository $repository;

    public function __construct(BlogsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
