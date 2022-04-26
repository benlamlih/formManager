<?php
namespace App\Type;

class CheckboxType implements TypeInterface
{
    public function build(object $field): string
    {
        return '<input type="checkbox" name="'.$field->name.'" id="'.$field->name.'">';
    }
}