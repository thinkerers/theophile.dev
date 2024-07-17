<?php

namespace src\controllers;
use \src\model\Database;

class Page
{
    public function __construct(
        private ?Database $db = null
    ) {
        $this->db ??= new Database();
    }

    public function render(array $parts)
    {
        $page = match($parts[0]) {
            'projets'   =>  "project.php",
            default     => "home.php"
        };

        require_once(TEMPLATES_ROOT . $page);
    }
}