<?php

namespace src\controllers;

class Page
{
    public function render(array $parts)
    {
        $page = match($parts[0]) {
            'login'       => "login.php",
            'roadmap'     => "roadmap.php",
            default   => "home.php"
        };

        require_once(TEMPLATE_ROOT . $page);
    }
}