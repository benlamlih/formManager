<?php
class Autoloader
{
    public static function register()
    {
        spl_autoload_register('self::load');
    }

    public static function load($class)
    {
        $iterator = new RecursiveDirectoryIterator('../src/');
        while($iterator->current()){
            $folder = $iterator->current();

            $path = sprintf('../src/%s/%s.php', $folder->getPathname(), $class);
            if(file_exists($path)){
                require_once $path;
                return;
            }

            $iterator->next();
        }
    }
}