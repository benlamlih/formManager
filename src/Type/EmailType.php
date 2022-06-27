<?php
namespace App\Type;

class EmailType implements TypeInterface
{
    public string $attributes;
    public function build(object $field): string
    {
        $this->attributes = parent::getAttributes($field);
        return '<input type="email" id="'.$field->name.'" name="'.$field->name.'" id="'.$field->name. '" ' . $this->attributes .'>';
    }
}