<?php

namespace App\Containers\BlogsSection\Admin\Actions;

use App\Containers\BlogsSection\Admin\Models\Admin;
use App\Containers\BlogsSection\Admin\Tasks\UpdateAdminTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateAdminAction extends Action
{
    public function run(Request $request): Admin
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateAdminTask::class)->run($request->id, $data);
    }
}
