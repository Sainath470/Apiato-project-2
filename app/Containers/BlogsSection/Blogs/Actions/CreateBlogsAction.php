<?php

namespace App\Containers\BlogsSection\Blogs\Actions;

use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Containers\BlogsSection\Blogs\Tasks\CreateBlogsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBlogsAction extends Action
{
    public function run(Request $request): Blogs
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateBlogsTask::class)->run($data);
    }
}
