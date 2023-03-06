<?php

spl_autoload_register('autoloader');

function autoloader($class)
{
    $path = "./classes";
    $extention = ".php";

    $fullPath = $path . $class . $extention;

    if (!file_exists($fullPath)) {
        return false;
    }

    include $fullPath;
    // include 'classes/' . $class . '.class.php';
}
