<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $directory = "modules";
        $enabled_modules = ['custom', 'custom_1', 'custom_2'];

        define('__ROOT__', dirname(dirname(__FILE__)));
//        echo(__ROOT__);
        foreach ($enabled_modules as $value) {
            require_once(__ROOT__.'/script_test/modules/'.$value.'.php');
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
//            print_r($function_name);
            if (function_exists($function_name)) {
                $function_name($hello_world);

            }
        }
        
        ?>
        <h1><?php print_r($hello_world); ?></h1>
    </body>
</html>
