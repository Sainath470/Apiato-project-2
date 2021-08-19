<?php

namespace App\Containers\BlogsSection\Blogs\Actions;

use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Containers\BlogsSection\Blogs\Tasks\FindBlogsByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindBlogsByIdAction extends Action
{
    public function run(Request $request): Blogs
    {
        return app(FindBlogsByIdTask::class)->run($request->id);
    }
}
