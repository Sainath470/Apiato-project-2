<?php

namespace App\Containers\BlogsSection\Blogs\Actions;

use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Containers\BlogsSection\Blogs\Tasks\CreateBlogsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Log;

class CreateBlogsAction extends Action
{
    public function run(Request $request)
    {
         $data = app(CreateBlogsTask::class)->run(
            $request->hotelName,
            $request->foodName,
            $request->description,
            $request->price,
            $request->rating,
            $request->place
        );
        return $data;
        Log::info($data);
    }
}
