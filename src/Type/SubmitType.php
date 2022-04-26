<?php
namespace App\Type;

class SubmitType implements TypeInterface
{
    public function build(object $field): string
    {
        return '<button type="submit">'.$field->text.'</button>';
    }
}