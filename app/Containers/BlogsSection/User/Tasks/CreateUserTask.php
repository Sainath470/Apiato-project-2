<?php

namespace App\Containers\BlogsSection\User\Tasks;

use App\Containers\BlogsSection\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Hash;

class CreateUserTask extends Task
{
    protected User $repository;

    public function __construct(User $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $firstName, string $lastName, string $email, string $password)
    {

        try {
            $user =  $this->repository->create([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'email' => $email,
                'password' => Hash::make($password)
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }

        return $user;
    }
}
