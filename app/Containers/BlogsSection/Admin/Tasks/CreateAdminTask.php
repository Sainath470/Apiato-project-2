<?php

namespace App\Containers\BlogsSection\Admin\Tasks;

use App\Containers\BlogsSection\Admin\Models\Admin;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Hash;

class CreateAdminTask extends Task
{
    protected Admin $repository;

    public function __construct(Admin $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $firstName, string $lastName, string $email, string $password)
    {

        try {
            $admin =  $this->repository->create([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'email' => $email,
                'password' => Hash::make($password)
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }

        return $admin;
    }
}
