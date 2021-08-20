<?php

namespace App\Containers\BlogsSection\Blogs\UI\API\Transformers;

use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Ship\Parents\Transformers\Transformer;

class DeleteBlogTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform($blog):array
    {
        $response = [
            // 'object' => $blogs->getResourceKey(),
            // 'id' => $blogs->getHashedKey(),
            // 'created_at' => $blogs->created_at,
            // 'updated_at' => $blogs->updated_at,
            // 'readable_created_at' => $blogs->created_at->diffForHumans(),
            // 'readable_updated_at' => $blogs->updated_at->diffForHumans(),
            $blog
        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $blogs->id,
        //     // 'deleted_at' => $blogs->deleted_at,
        // ], $response);

        return $response;
    }
}
