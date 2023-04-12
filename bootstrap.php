<?php
define("_DIR_ROOT", str_replace("\\", "/", __DIR__));

$web_root = 'http://' . $_SERVER['HTTP_HOST'];

$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));
$web_root = $web_root . $folder;

define('_WEB_ROOT', $web_root);

require_once 'core/Connection.php';
require_once 'core/Database.php';
$db = new Database();
$db1 = new Database();
$query = $db->query("SELECT * FROM sanpham");
// print_r($query);
// $data = [];
// while ($row = mysqli_fetch_assoc($query)) {
//     // echo '<pre>';
//     // print_r($row);
//     // echo '</pre>';
//     $data[] = $row;
// };

echo '<pre>';
print_r($db->fetchAll($query));
echo '</pre>';

// $conn = Connection::getInstance();
require_once 'configs/routes.php';
require_once 'app/App.php'; //Load app
require_once 'core/Controller.php'; //Load base controller
