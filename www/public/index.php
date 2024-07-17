<?php
require_once '../src/bootstrap.php';

$request = trim(mb_strtolower($_SERVER['REQUEST_URI']), '/');
$parts = explode('/', $request);
$page = new src\controllers\Page();


try {    
    $page->render($parts);
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require_once(TEMPLATES_ROOT .'error.php');
}

