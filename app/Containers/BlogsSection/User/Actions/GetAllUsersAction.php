<?php

namespace App\Containers\BlogsSection\User\Actions;

use App\Containers\BlogsSection\User\Tasks\GetAllUsersTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllUsersAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllUsersTask::class)->addRequestCriteria()->run();
    }
}
