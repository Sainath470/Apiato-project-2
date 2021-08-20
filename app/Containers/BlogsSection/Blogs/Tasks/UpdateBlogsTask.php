<?php

namespace App\Containers\BlogsSection\Blogs\Tasks;

use App\Containers\BlogsSection\Admin\Models\Admin;
use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Ship\Parents\Tasks\Task;
use JWTAuth;
use Log;
use PhpParser\Node\Expr;

class UpdateBlogsTask extends Task
{
    protected Blogs $repository;

    public function __construct(Blogs $repository)
    {
        $this->repository = $repository;
    }

    public function run($blogId, string $hotelName, string $foodName, string $description, string $price, string $rating, string $place)
    {
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $adminId = $details["sub"];

        $adminPresent = Admin::where('id', $adminId)->value('id');
        $blogIdPresent = Blogs::where('id', $blogId)->value('id');

        if(!$adminPresent){
            $message = "Invalid credentials";
            return $message;
        }

        if(!$blogIdPresent){
            $message = "No blog is present with the given id";
            return $message;
        }
   
            return $this->repository->updateQuietly([
                'id' => $blogId,
                'admin_id' => $adminId,
                'hotelName' => $hotelName,
                'foodName' => $foodName,
                'description' => $description,
                'price' => $price,
                'rating' => $rating,
                'place' => $place
            ]);
            
    }
}
