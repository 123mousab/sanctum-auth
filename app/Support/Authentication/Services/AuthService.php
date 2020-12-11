<?php


namespace App\Support\Authentication\Services;


use App\Support\Authentication\DataTransferObjects\LoginData;
use App\Support\Authentication\DataTransferObjects\LoginResponse;

class AuthService
{
    public static function login(LoginData $loginData) : LoginResponse
    {
        $user = auth($loginData->guard())->attempt($loginData->credentials());

        if($user) {
            return new LoginResponse(true, 200, 'Logged In.', $user);
        }
        return new LoginResponse(false, 422, 'Invalid username or password.');
    }
}
