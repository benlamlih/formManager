<?php
namespace App\Type;

class EmailType implements TypeInterface
{
    public function build(object $field): string
    {
        return '<input type="email" id="'.$field->name.'" name="'.$field->name.'">';
    }
}