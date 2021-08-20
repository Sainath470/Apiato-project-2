<?php

namespace App\Containers\BlogsSection\Blogs\Actions;

use App\Containers\BlogsSection\Blogs\Tasks\GetAllBlogsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBlogsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllBlogsTask::class)->run();
    }
}
