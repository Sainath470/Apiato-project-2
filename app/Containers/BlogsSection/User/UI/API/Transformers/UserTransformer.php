<?php

namespace App\Containers\BlogsSection\User\UI\API\Transformers;

use App\Containers\BlogsSection\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

class UserTransformer extends Transformer
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

    public function transform(User $user): array
    {
        $response = [
            // 'object' => $user->getResourceKey(),
            'id' => $user->getHashedKey(),
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
            'readable_created_at' => $user->created_at->diffForHumans(),
            'readable_updated_at' => $user->updated_at->diffForHumans(),
            'message' => 'User Successfully registered'
        ];

        $response = $this->ifAdmin([
            'real_id'    => $user->id,
            // 'deleted_at' => $user->deleted_at,
        ], $response);

        return $response;
    }
}
