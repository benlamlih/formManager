<?php
namespace App\Saver;

interface SaverInterface
{
    public static function save($filename, $data);
}