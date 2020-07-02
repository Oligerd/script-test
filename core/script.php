<?php

$hello_world = "Hello world";
$directory = "modules";
//$modules_names = [];
$enabled_modules = ['custom', 'custom_1', 'custom_2'];
$scanned_directory = array_diff(scandir($directory), array('..', '.'));

define('__ROOT__', dirname(dirname(__FILE__)));

//foreach ($scanned_directory as $item) {
//    $item = rtrim($item, ".php");
//    $modules_names[] = $item;
//}
// list of modules
function modules_names($scanned_directory) {
    foreach ($scanned_directory as $item) {
        $modules_names[] = rtrim($item, ".php");
    }
    return($modules_names);
}

//print_r(modules_names($scanned_directory));
//list of enabled modules
function enabled_modules_list($enabled_modules) {
    foreach ($enabled_modules as $item) {
        print_r($item);
    }
    return;
}

//enabled_modules_list($enabled_modules);
//foreach ($enabled_modules as $value) {
//    require_once(__ROOT__ . '/modules/' . $value . '.php'); //parsing modules;
//}
// enable modules
function enable_modules($enabled_modules) {
    foreach ($enabled_modules as $module_name) {
        require_once(__ROOT__ . '/modules/' . $module_name . '.php');
    }
}

function modules_check($modules_names) {
    foreach ($modules_names as $module_name) {

        $function_name = $module_name . '_hello_world';

        if (function_exists($function_name)) {
            $function_name($hello_world);
        }
    }
    return;
}
