<?php

namespace App\Containers\BlogsSection\Blogs\Tasks;

use App\Containers\BlogsSection\Blogs\Data\Repositories\BlogsRepository;
use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Ship\Parents\Tasks\Task;
use DB;
use JWTAuth;

class GetAllBlogsTask extends Task
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
        $admin_id = $details["sub"];
        return DB::table('blogs')->where('admin_id', $admin_id)->paginate();
    }
}
