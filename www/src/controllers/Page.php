<?php

namespace src\controllers;
use \src\model\Database;

class Page
{
    public function __construct(
        public ?Database $db = null
    ) {
        $this->db ??= new Database();
    }

    public function render(array $parts)
    {
        $page = match($parts[0]) {
            'admin'     =>  "admin.php",
            'projets'   =>  "project.php",
            default     => "home.php"
        };

        require_once(TEMPLATES_ROOT . $page);
    }
}