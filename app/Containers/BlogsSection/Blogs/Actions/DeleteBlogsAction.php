<?php

namespace App\Containers\BlogsSection\Blogs\Actions;

use App\Containers\BlogsSection\Blogs\Tasks\DeleteBlogsTask;
use App\Containers\BlogsSection\Blogs\UI\API\Requests\DeleteBlogsRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBlogsAction extends Action
{
    public function run(DeleteBlogsRequest $request)
    {
        return app(DeleteBlogsTask::class)->run(
            $request->id
        );
    }
}
