<?php
namespace App\Util;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register('self::load');
    }

    public static function load($class)
    {
        $classpath = sprintf('../%s.php', $class);
        $classpath = str_replace('App', 'src', $classpath);
        $classpath = str_replace('\\', '/', $classpath);
        require_once $classpath;
    }
}