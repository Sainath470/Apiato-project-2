<?php

namespace App\Containers\BlogsSection\User\Actions;

use App\Containers\BlogsSection\User\Models\User;
use App\Containers\BlogsSection\User\Tasks\UpdateUserTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateUserAction extends Action
{
    public function run(Request $request): User
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateUserTask::class)->run($request->id, $data);
    }
}
