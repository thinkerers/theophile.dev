<?php
define('DEV', true);                        // In development or live? Development = true | Live = false
define('DOMAIN', getenv('SITE_DOMAIN'));

$this_folder   = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));
$parent_folder = dirname($this_folder);

define("PUBLIC_ROOT", $parent_folder . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
define("TEMPLATES_ROOT", APP_ROOT . DIRECTORY_SEPARATOR .'templates' . DIRECTORY_SEPARATOR);
define("SRC_ROOT", APP_ROOT . DIRECTORY_SEPARATOR .'src' . DIRECTORY_SEPARATOR);
define("CONTROLLERS_ROOT", SRC_ROOT . DIRECTORY_SEPARATOR .'controllers' . DIRECTORY_SEPARATOR);
define("LIB_ROOT", SRC_ROOT . DIRECTORY_SEPARATOR .'lib' . DIRECTORY_SEPARATOR);
define("MODEL_ROOT", SRC_ROOT . DIRECTORY_SEPARATOR .'model' . DIRECTORY_SEPARATOR);

define("DB_NAME", 'database.sqlite');
define("DB_PATH", MODEL_ROOT . DB_NAME);