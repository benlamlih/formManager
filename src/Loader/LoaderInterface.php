<?php
namespace App\Loader;

use stdClass;

interface LoaderInterface
{
    public static function load(string $path): object;
    public static function getExtension(): string;
}