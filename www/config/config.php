<?php
define('DEV', true);                        // In development or live? Development = true | Live = false
define('DOMAIN', 'https://theophile.dev/');   // Domain (used to create links in emails)
define('ROOT_FOLDER', 'public');            // Name of document root folder (e.g. public, content, htdocs)

$this_folder   = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));
$parent_folder = dirname($this_folder);
define("DOC_ROOT", $parent_folder . DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR);
define("TEMPLATE_ROOT", APP_ROOT . DIRECTORY_SEPARATOR .'templates' . DIRECTORY_SEPARATOR);