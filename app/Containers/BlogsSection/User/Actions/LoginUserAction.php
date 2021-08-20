<?php

namespace App\Containers\BlogsSection\User\Actions;

use App\Containers\BlogsSection\User\Tasks\LoginUserTask;
use App\Containers\BlogsSection\User\UI\API\Requests\LoginUserRequest;
use App\Ship\Parents\Actions\Action;

class LoginUserAction extends Action
{
    public function run(LoginUserRequest $request)
    {
        $user = app(LoginUserTask::class)->run(
            $request->email,
            $request->password
        );
        
        return $user;
    }
}
