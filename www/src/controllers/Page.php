<?php

namespace src\controllers;

class Page
{
    public function render(array $parts)
    {
        $page = match($parts[0]) {
            'robots.txt' => "robots.txt",
            'login'       => TEMPLATE_ROOT ."login.php",
            'roadmap'     =>TEMPLATE_ROOT . "roadmap.php",
            default   => TEMPLATE_ROOT ."home.php"
        };

        require_once($page);
    }
}