<?php
namespace App\Loader;

use stdClass;

class JsonLoader implements LoaderInterface
{
    public static function load(string $path): object
    {
        $raw = file_get_contents($path);
        return json_decode($raw);
    }

    public static function getExtension(): string
    {
        return 'json';
    }
}