<?php

spl_autoload_register('lbyt_autoloader');
function lbyt_autoloader($class_name)
{
    if (false !== strpos($class_name, 'LBYT')) {
        $classes_dir = realpath(plugin_dir_path(__FILE__)) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;
        $class_file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
        require_once $classes_dir . $class_file;
    }
}

