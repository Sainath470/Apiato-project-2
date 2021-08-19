<?php

namespace App\Containers\BlogsSection\User\Actions;

use App\Containers\BlogsSection\User\Tasks\DeleteUserTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteUserAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteUserTask::class)->run($request->id);
    }
}
