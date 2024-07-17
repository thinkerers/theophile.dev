<?php
header_remove("X-Powered-By");
header_remove("Pragma");

session_set_cookie_params([
    'lifetime' => 600,
    'path' => '/',
    'domain' => '.theophile.dev',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

session_name('__Secure-PHPSESSID');

session_start();

define('APP_ROOT', dirname(__FILE__, 2));
require APP_ROOT . '/config/config.php';

if (DEV === false) {
    set_exception_handler('handle_exception');
    set_error_handler('handle_error');
    register_shutdown_function('handle_shutdown');
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = APP_ROOT . DIRECTORY_SEPARATOR . $class . '.php'; 
    require $file;
});