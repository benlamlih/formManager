<?php
namespace App;

use App\Loader\ConfigurationLoader;
use App\Type\TypeInterface;
use App\Util\AbstractService;
use Exception;

final class FormGenerator extends AbstractService
{
    private ConfigurationLoader $configurationLoader;

    protected function __construct()
    {
        parent::__construct();
        $this->configurationLoader = ConfigurationLoader::get();
    }

    public function build(string $type): string
    {
        $config = $this->configurationLoader->load($type);
        return $this->buildView($config);
    }

    private function buildView(object $config): string
    {
        $template = '<form>';

        foreach ($config->form->fields as $field) {
            $template .= $this->buildFieldView($field);
        }

        $template .= '</form>';
        return $template;
    }

    private function buildFieldView(object $field): string
    {
        $template = '<div>';

        if(isset($field->label)){
            $template .= '<label for="'.$field->name.'">'.$field->label.'</label>';
        }

        $className = sprintf('App\Type\%sType', ucfirst($field->type));
        if(!class_exists($className)){
            throw new Exception(sprintf("Field type '%s' doesn't exist", $field->type));
        }

        $type = new $className();
        if(!$type instanceof TypeInterface){
            throw new Exception(sprintf("Field type '%s' doesn't implement TypeInterface", $field->type));
        }

        $template .= $type->build($field);

        $template .= '</div>';

        return $template;
    }
}