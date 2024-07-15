<?php

namespace src\controllers;

class Account
{
    public function login()
    {
        $_SESSION['user'] = 'admin';
    }

    public function logout()
    {
        session_destroy();
    }
}