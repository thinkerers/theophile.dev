<?php
require_once '../src/bootstrap.php';

$page = new src\controllers\Page();

$request = trim(mb_strtolower($_SERVER['REQUEST_URI']), '/');
$parts = explode('/', $request);

try {    
    $page->render($parts);
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require_once(TEMPLATES_ROOT .'error.php');
}

