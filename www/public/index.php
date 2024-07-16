<?php
require_once '../src/bootstrap.php';

$account = new src\controllers\Account();
$page = new src\controllers\Page();

$request = trim(mb_strtolower($_SERVER['REQUEST_URI']), '/');
$parts = explode('/', $request);

try {    
    $action = match($parts[1] ?? "") {
        ''       => null,
        'login'  => $account->login(),
        'logout' => $account->logout(),
        default   => throw new Exception("Erreur."),
    };
    $page->render($parts);
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require_once(TEMPLATE_ROOT .'error.php');
}