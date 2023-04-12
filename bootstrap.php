<?php
define("_DIR_ROOT", str_replace("\\", "/", __DIR__));

$web_root = 'http://' . $_SERVER['HTTP_HOST'];

$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));
$web_root = $web_root . $folder;

define('_WEB_ROOT', $web_root);

require_once 'core/Connection.php';
require_once 'core/Database.php';

require_once 'configs/routes.php';
require_once 'app/App.php'; //Load app
require_once 'core/Model.php';
require_once 'core/Controller.php'; //Load base controller
