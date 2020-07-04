<?php
require_once __DIR__ . '/functions.php';


$hello_world = "Hello world";
$directory = "modules";
$enabled_modules = ['custom', 'custom_1', 'custom_2'];

define('__ROOT__', dirname(dirname(__FILE__)));

foreach ($enabled_modules as $value) {
    require_once(__ROOT__ . '/modules/' . $value . '.php');
}

$scanned_directory = array_diff(scandir($directory), array('..', '.'));


foreach ($scanned_directory as $key => $item) {
    $item = rtrim($item, ".php");
    $modules_names[] = $item;
}


$output = w_modules($modules_names, $hello_world);
