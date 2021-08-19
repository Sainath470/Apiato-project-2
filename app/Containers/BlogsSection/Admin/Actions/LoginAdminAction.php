<?php

namespace App\Containers\BlogsSection\Admin\Actions;

use App\Containers\BlogsSection\Admin\Tasks\LoginAdminTask;
use App\Containers\BlogsSection\Admin\UI\API\Requests\LoginAdminRequest;
use App\Ship\Parents\Actions\Action;

class LoginAdminAction extends Action
{
    public function run(LoginAdminRequest $request)
    {
        $admin = app(LoginAdminTask::class)->run(
            $request->email,
            $request->password
        );
        
        return $admin;
    }
}
