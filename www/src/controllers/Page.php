<?php

namespace src\controllers;

class Page
{
    public function render(array $parts)
    {
        $page = match($parts[0]) {
            'robots.txt' => "robots.txt",
            'sitemap.xml' => "sitemap.xml",
            'contact'     => TEMPLATE_ROOT ."contact.php",
            'login'       => TEMPLATE_ROOT ."login.php",
            'roadmap'     =>TEMPLATE_ROOT . "roadmap.php",
            default   => TEMPLATE_ROOT ."home.php"
        };

        require_once($page);
    }
}