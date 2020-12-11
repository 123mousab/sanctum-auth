<?php


namespace App\Support\Authentication\DataTransferObjects;


class LoginData
{
    public $guard;
    public $username;
    public $password;

    public function __construct($guard, $username, $password)
    {
        $this->guard = $guard;
        $this->username = $username;
        $this->password = $password;
    }

    public function guard()
    {
        return $this->guard;
    }

    public function username()
    {
        return $this->username;
    }

    public function password()
    {
        return $this->password;
    }

    public function credentials()
    {
        return [
            'username' => $this->username,
            'password' => $this->username,
        ];
    }
}
