<?php


namespace App\Support\Authentication\DataTransferObjects;


class LoginResponse
{
    public $status;
    public $code;
    public $message;
    public $user;

    public function __construct($status, $code, $message, $user = null)
    {
        $this->status = $status;
        $this->code = $code;
        $this->message = $message;
        $this->user = $user;
    }

    public function status()
    {
        return $this->status;
    }

    public function code()
    {
        return $this->code;
    }

    public function message()
    {
        return $this->message;
    }

    public function user()
    {
        return $this->user;
    }
}
