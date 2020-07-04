<?php

function w_modules($var, $var1){
//    print_r($var1);
    foreach ($var as $module_name) {
//        print_r($module_name);
        $function_name = $module_name . '_hello_world';
//        print_r($function_name);
//        print_r(function_exists($function_name));
        if (function_exists($function_name)) {
//           print_r("before: ".$var1."'");
           $function_name($var1);
//           print_r("after: ".$var1."'");
        }
    }
//print_r($var1);
return($var1);
}

