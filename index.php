<?php

class AuthController
{
    public function loginCheck()
    {
        return json_encode([
            "status" => "ok",
            "message" => "login success"
        ]);
    }
}