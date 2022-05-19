<?php
namespace App\Loader;

class XmlLoader implements LoaderInterface
{
    public static function load(string $path): object
    {
        $xml = simplexml_load_file($path);

        return $xml;
    }

    public static function getExtension(): string
    {
        return 'xml';
    }
}