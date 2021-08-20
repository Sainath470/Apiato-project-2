<?php

namespace App\Containers\BlogsSection\User\Actions;

use App\Containers\BlogsSection\User\Models\User;
use App\Containers\BlogsSection\User\Tasks\CreateUserTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateUserAction extends Action
{
    public function run(Request $request): User
    {
        $user = app(CreateUserTask::class)->run(
            $request->firstName,
            $request->lastName,
            $request->email,
            $request->password
        );

        return $user;
    }
}
