<?php

namespace App\Containers\BlogsSection\User\UI\API\Transformers;

use App\Containers\BlogsSection\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

class LoginUserTransformer extends Transformer
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
        $response = [
            // 'object' => $token->getResourceKey(),
            // 'id' => $admin->getHashedKey(),
            // 'firstName' => $admin->firstName,
            // 'lastName' => $admin->lastName,
            // 'email' => $admin->email,
            // 'created_at' => $admin->created_at,
            // 'updated_at' => $admin->updated_at,
            // 'readable_created_at' => $admin->created_at->diffForHumans(),
            // 'readable_updated_at' => $admin->updated_at->diffForHumans(),
             $data
        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $admin->id,
        //     // 'deleted_at' => $admin->deleted_at,
        // ], $response);

        return $response;
    }
}
