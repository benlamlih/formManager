<?php
namespace App\Type;

class TextType implements TypeInterface
{
    public function build(object $field): string
    {
        return '<input type="text" id="'.$field->name.'" name="'.$field->name.'">';
    }
}