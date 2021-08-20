<?php

namespace App\Containers\BlogsSection\Blogs\UI\API\Transformers;

use App\Containers\BlogsSection\Blogs\Models\Blogs;
use App\Ship\Parents\Transformers\Transformer;
use Log;

class UpdateBlogsTransformer extends Transformer
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

    public function transform(string $data): array
    {
        Log::info([$data]);
        $response = [
            // 'object' => $blogs->getResourceKey(),
            // 'id' => $blogs->getHashedKey(),
            // 'created_at' => $blogs->created_at,
            // 'updated_at' => $blogs->updated_at,
            // 'readable_created_at' => $blogs->created_at->diffForHumans(),
            // 'readable_updated_at' => $blogs->updated_at->diffForHumans(),
            'message' => $data
        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $blogs->id,
        //     // 'deleted_at' => $blogs->deleted_at,
        // ], $response);

        return $response;
    }
}
