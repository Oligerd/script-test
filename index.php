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

        $scanned_directory = array_diff(scandir($directory), array('..', '.'));

        $items = array();

        foreach ($scanned_directory as $key => $item) {
            $item = rtrim($item, ".php");
            $items[] = $item;
        }

        print_r($items);
        ?>
    </body>
</html>
