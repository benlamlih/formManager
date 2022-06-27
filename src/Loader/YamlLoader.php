<?php
namespace App\Loader;

// TODO: Add yaml installation in docker or Apache Web server
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