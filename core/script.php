<?php
$hello_world = "Hello world";
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


function w_modules($vars, $var1){
    print_r($var1);
    foreach ($vars as $module_name) {
//        print_r($module_name);
        $function_name = $module_name . '_hello_world';
//        print_r($function_name);
        print_r(function_exists($function_name));
        if (function_exists($function_name)) {
           $function_name($var1);
           print_r("'".$var1."'");
        }
    }
return;
}


w_modules($modules_names, $hello_world);
