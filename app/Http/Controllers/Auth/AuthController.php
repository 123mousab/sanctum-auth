<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\LoginRequest;
use App\Models\User;
use App\Traits\ResponseJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    use ResponseJson;

    public function login(LoginRequest $request)
    {
        $model = config('auth.providers.users.model');

        $user = $model::where($request->username(), $request->input('username'))->first();

        if (! $user || ! Hash::check($request->input('password'), $user->password)) {
            return ResponseJson::failedLoginResponse();
        }

        if ($token = $user->createToken($request->userAgent(), ['user.api'])->plainTextToken) {
            return ResponseJson::successLoginResponse($user, $token);
        }
    }
}
