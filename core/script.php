<?php
$hello_world = "Hello world";
$directory = "modules";
$enabled_modules = ['custom', 'custom_1', 'custom_2'];

define('__ROOT__', dirname(dirname(__FILE__)));

require_once __DIR__ . '/functions.php';

$scanned_directory = array_diff(scandir($directory), array('..', '.'));


foreach ($scanned_directory as $key => $item) {
    $item = rtrim($item, ".php");
    $modules_names[] = $item;
}

enable_modules($enabled_modules);
$output = w_modules($modules_names, $hello_world);
