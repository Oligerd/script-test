<?php

$directory = "modules";
$enabled_modules = ['custom', 'custom_1', 'custom_2'];

define('__ROOT__', dirname(dirname(__FILE__)));

foreach ($enabled_modules as $value) {
    require_once(__ROOT__ . '/modules/' . $value . '.php');
}

$scanned_directory = array_diff(scandir($directory), array('..', '.'));

$modules_names = [];

foreach ($scanned_directory as $key => $item) {
    $item = rtrim($item, ".php");
    $modules_names[] = $item;
}

//        print_r($modules_names);

$hello_world = "Hello world";

foreach ($modules_names as $module_name) {

    $function_name = $module_name . '_hello_world';

    if (function_exists($function_name)) {
        $function_name($hello_world);
    }
}



