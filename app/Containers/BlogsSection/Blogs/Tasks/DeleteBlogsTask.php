<?php

namespace App\Containers\BlogsSection\Blogs\Tasks;

use App\Containers\BlogsSection\Admin\Models\Admin;
use App\Containers\BlogsSection\Blogs\Data\Repositories\BlogsRepository;
use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Firebase\JWT\JWT;
use JWTAuth;

class DeleteBlogsTask extends Task
{
    protected Blogs $repository;

    public function __construct(Blogs $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $adminId = $details["sub"];

        $adminPresent = Admin::where('id', $adminId)->value('id');
        $adminPresentInBlogs = Blogs::where('id', $id)->value('admin_id');
        $blogPresent = Blogs::where('id', $id)->value('id');

        if(!$adminPresent){
            return $message = "Invalid authentication";
        }
        if($adminPresent != $adminPresentInBlogs){
            return $message = "No blog is present for this Admin";
        }
        $this->repository->where('id', $blogPresent)->delete();

        return $message = "blog deleted successfully";
    }
}
