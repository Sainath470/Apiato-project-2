<?php

namespace App\Containers\BlogsSection\Admin\Actions;

use App\Containers\BlogsSection\Admin\Tasks\DeleteAdminTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteAdminAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteAdminTask::class)->run($request->id);
    }
}
