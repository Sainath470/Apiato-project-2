<?php

namespace App\Containers\BlogsSection\User\Tasks;

use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Containers\BlogsSection\User\Models\User;
use App\Containers\BlogsSection\User\UI\API\Requests\UserGetAllBlogsRequest;
use App\Ship\Parents\Tasks\Task;
use DB;
use Firebase\JWT\JWT;
use JWTAuth;

class UserGetAllBlogsTask extends Task
{
    protected Blogs $repository;

    public function __construct(Blogs $repository)
    {
        $this->repository = $repository;
    }


    public function run()
    {
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $user_id = $details["sub"];

        $userPresent = User::where('id', $user_id)->first();

        if(!$userPresent){
            return $message = "User credentials doesn' exists";
        }

        return DB::table('blogs')->select("*")->get();
    }
}
