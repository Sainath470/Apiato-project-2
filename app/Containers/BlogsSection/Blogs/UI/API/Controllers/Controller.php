<?php

namespace App\Containers\BlogsSection\Blogs\UI\API\Controllers;

use App\Containers\BlogsSection\Blogs\UI\API\Requests\CreateBlogsRequest;
use App\Containers\BlogsSection\Blogs\UI\API\Requests\DeleteBlogsRequest;
use App\Containers\BlogsSection\Blogs\UI\API\Requests\GetAllBlogsRequest;
use App\Containers\BlogsSection\Blogs\UI\API\Requests\FindBlogsByIdRequest;
use App\Containers\BlogsSection\Blogs\UI\API\Requests\UpdateBlogsRequest;
use App\Containers\BlogsSection\Blogs\UI\API\Transformers\BlogsTransformer;
use App\Containers\BlogsSection\Blogs\Actions\CreateBlogsAction;
use App\Containers\BlogsSection\Blogs\Actions\FindBlogsByIdAction;
use App\Containers\BlogsSection\Blogs\Actions\GetAllBlogsAction;
use App\Containers\BlogsSection\Blogs\Actions\UpdateBlogsAction;
use App\Containers\BlogsSection\Blogs\Actions\DeleteBlogsAction;
use App\Containers\BlogsSection\Blogs\UI\API\Transformers\UpdateBlogsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;
use Log;

class Controller extends ApiController
{
    public function createBlogs(CreateBlogsRequest $request): JsonResponse
    {
        $blogs = app(CreateBlogsAction::class)->run($request);
        return $this->created($this->transform($blogs, BlogsTransformer::class));
    }

    public function findBlogsById(FindBlogsByIdRequest $request): array
    {
        $blogs = app(FindBlogsByIdAction::class)->run($request);
        return $this->transform($blogs, BlogsTransformer::class);
    }

    public function getAllBlogs(GetAllBlogsRequest $request): array
    {
        $blogs = app(GetAllBlogsAction::class)->run($request);
        return $this->transform($blogs, BlogsTransformer::class);
    }

    public function updateBlogs(UpdateBlogsRequest $request): array
    {
        $blogs = app(UpdateBlogsAction::class)->run($request);
        return $this->transform($blogs, UpdateBlogsTransformer::class);
    }

    public function deleteBlogs(DeleteBlogsRequest $request): JsonResponse
    {
        app(DeleteBlogsAction::class)->run($request);
        return $this->noContent();
    }
}
