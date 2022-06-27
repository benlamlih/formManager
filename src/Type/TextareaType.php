<?php
namespace App\Type;

class TextareaType extends InputType implements TypeInterface
{
    public string $attributes;

    public function build(object $field): string
    {
        $this->attributes = parent::getAttributes($field);
        return '<textarea name="'.$field->name.'" id="'.$field->name. ' ' . $this->attributes . '"></textarea>';
    }
}