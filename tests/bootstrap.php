<?php

date_default_timezone_set('America/Chicago');

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
        realpath(__DIR__ . '/../library'),
        get_include_path(),
    )));

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

spl_autoload_register('autoload');

function d($expression)
{
    var_dump($expression);
}

function dd($expression)
{
    d($expression);
    die();
}
