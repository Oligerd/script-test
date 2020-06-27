<?php

$hello_world = "Hello world";
$directory = "modules";
$modules_names = [];
$enabled_modules = ['custom', 'custom_1', 'custom_2'];
$scanned_directory = array_diff(scandir($directory), array('..', '.'));

define('__ROOT__', dirname(dirname(__FILE__)));

foreach ($enabled_modules as $value) {
    require_once(__ROOT__ . '/modules/' . $value . '.php'); //parsing modules;
}

//foreach ($scanned_directory as $item) {
//    $item = rtrim($item, ".php");
//    $modules_names[] = $item;
//}

function modules_names($scanned_directory) {
    foreach ($scanned_directory as $item) {
        $modules_names[] = rtrim($item, ".php");
    }
}

//modules_names($scanned_directory);

//print_r(modules_names($scanned_directory));


foreach ($modules_names as $module_name) {

    $function_name = $module_name . '_hello_world';

    if (function_exists($function_name)) {
        $function_name($hello_world);
    }
}



