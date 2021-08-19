<?php

namespace App\Containers\BlogsSection\Admin\Actions;

use App\Containers\BlogsSection\Admin\Models\Admin;
use App\Containers\BlogsSection\Admin\Tasks\CreateAdminTask;
use App\Containers\BlogsSection\Admin\UI\API\Requests\CreateAdminRequest;
use App\Ship\Parents\Actions\Action;

class CreateAdminAction extends Action
{
    public function run(CreateAdminRequest $request):Admin
    {
        $admin = app(CreateAdminTask::class)->run(
            $request->firstName,
            $request->lastName,
            $request->email,
            $request->password
        );

        return $admin;
    }
}
