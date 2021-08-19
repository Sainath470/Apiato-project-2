<?php

namespace App\Containers\BlogsSection\Blogs\Actions;

use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Containers\BlogsSection\Blogs\Tasks\UpdateBlogsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateBlogsAction extends Action
{
    public function run(Request $request): Blogs
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateBlogsTask::class)->run($request->id, $data);
    }
}
