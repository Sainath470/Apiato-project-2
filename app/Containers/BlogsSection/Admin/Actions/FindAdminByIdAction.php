<?php

namespace App\Containers\BlogsSection\Admin\Actions;

use App\Containers\BlogsSection\Admin\Models\Admin;
use App\Containers\BlogsSection\Admin\Tasks\FindAdminByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindAdminByIdAction extends Action
{
    public function run(Request $request): Admin
    {
        return app(FindAdminByIdTask::class)->run($request->id);
    }
}
