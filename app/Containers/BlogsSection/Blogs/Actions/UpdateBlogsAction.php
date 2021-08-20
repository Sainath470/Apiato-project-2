<?php

namespace App\Containers\BlogsSection\Blogs\Actions;

use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Containers\BlogsSection\Blogs\Tasks\UpdateBlogsTask;
use App\Containers\BlogsSection\Blogs\UI\API\Requests\UpdateBlogsRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Log;

class UpdateBlogsAction extends Action
{
    public function run(Request $request)
    {
        $blog = app(UpdateBlogsTask::class)->run(
            $request->id,
            $request->hotelName,
            $request->foodName,
            $request->description,
            $request->price,
            $request->rating,
            $request->place
        );
        return $blog;
    }
}
