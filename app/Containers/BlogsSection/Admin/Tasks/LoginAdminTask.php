<?php

namespace App\Containers\BlogsSection\Admin\Tasks;

use App\Containers\BlogsSection\Admin\Models\Admin;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginAdminTask extends Task
{
    protected Admin $data;

    public function __construct(Admin $data)
    {
         $this->data = $data;
    }

    public function run(string $email, string $password)
    {
        $userPresent = Admin::where('email', $email)->first();
        $passwordMatch = Admin::where('email', $email)->value('password');

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
