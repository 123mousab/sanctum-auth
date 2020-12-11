<?php


namespace App\Traits;


trait ResponseJson
{

    public static function successLoginResponse($user, $token)
    {
        return response()->json(['message' => 'Logged In.', 'user' => $user, 'token' => $token], 200);
    }

    public static function failedLoginResponse()
    {
        return response()->json(['message' => 'Invalid username or password.'], 403);
    }
}
