<?php
namespace App\Type;

class CheckboxType extends InputType implements TypeInterface
{
    public string $attributes;

    public function build(object $field): string
    {
        $this->attributes = parent::getAttributes($field);
        return '<input type="checkbox" name="'.$field->name.'" id="'.$field->name. '" ' . $this->attributes .'>';
    }
}