<?php

namespace App\Containers\BlogsSection\User\Tasks;

use App\Containers\BlogsSection\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Hash;
use JWTAuth;

class LoginUserTask extends Task
{
    public function __construct()
    {
        // ..
    }

    public function run(string $email, string $password)
    {
        $userPresent = User::where('email', $email)->first();
        $passwordMatch = User::where('email', $email)->value('password');

        if(!$userPresent){
            $message = "Invalid Email";
            return $message;
        }
        if(!Hash::check($password, $passwordMatch)){
            $message = "Please check the password";
            return $message;
        }
        $token = JWTAuth::fromUser($userPresent);
        return $token;
    }
}
