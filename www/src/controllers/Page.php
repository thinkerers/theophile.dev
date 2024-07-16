<?php

namespace src\controllers;

class Page
{
    public function render(array $parts)
    {
        $page = match($parts[0]) {
            'projets'     =>TEMPLATE_ROOT . "project.php",
            default   => TEMPLATE_ROOT ."home.php"
        };

        require_once($page);
    }
}