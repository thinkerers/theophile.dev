<?php

namespace src\controllers;

class Page
{
    public function render(array $parts)
    {
        if($parts[0] === '/login') {
            require_once(TEMPLATE_ROOT . 'login.php');
            return;
        }
        require_once(TEMPLATE_ROOT . 'home.php');
    }
}