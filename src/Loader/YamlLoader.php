<?php
namespace App\Loader;

class YamlLoader implements LoaderInterface
{
    public static function load(string $path): object
    {
        $yaml = yaml_parse($path);

        return $yaml;
    }

    public static function getExtension(): string
    {
        return 'yaml';
    }
}