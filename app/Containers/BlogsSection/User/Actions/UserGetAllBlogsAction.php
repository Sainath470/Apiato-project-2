<?php

namespace App\Containers\BlogsSection\User\Actions;

use App\Containers\BlogsSection\User\Tasks\UserGetAllBlogsTask;
use App\Containers\BlogsSection\User\UI\API\Requests\UserGetAllBlogsRequest;
use App\Ship\Parents\Actions\Action;
use Request;

class UserGetAllBlogsAction extends Action
{
    public function run(UserGetAllBlogsRequest $request)
    {
      return   app(UserGetAllBlogsTask::class)->run();
    }

}
