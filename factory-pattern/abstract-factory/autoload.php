<?php

function my_autoloader($class) {
    $class      = explode('\\', $class);
    $class_name = array_pop($class);
    require_once $class_name.'.php';
}

// Register the autoloader:
spl_autoload_register('my_autoloader');