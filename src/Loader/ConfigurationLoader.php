<?php
namespace App\Loader;

use App\Util\AbstractService;
use Exception;
use stdClass;

class ConfigurationLoader extends AbstractService
{
    const CONFIG_FORMAT = [
        'json' => JsonLoader::class,
        'xml' => XmlLoader::class,
    ];

    public function load(string $configName): object
    {
        $loader = $this->determineFormat($configName);
        $path = sprintf('../config/form/%s.%s', $configName, $loader::getExtension());
        return $loader::load($path);
    }

    private function determineFormat(string $configName)
    {
        foreach(self::CONFIG_FORMAT as $format => $loader){
            $path = sprintf('../config/form/%s.%s', $configName, $format);
            if(file_exists($path)){
                return $loader;
            }
        }

        throw new Exception("Configuration not found");
    }
}