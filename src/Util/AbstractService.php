<?php
namespace App\Util;

abstract class AbstractService
{
    protected static ?self $_instance = null;

    protected function __construct(){}

    public static function get()
    {
        if(!self::$_instance){
            $class = get_called_class();
            self::$_instance = new $class;
        }

        return self::$_instance;
    }
}