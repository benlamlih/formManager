<?php
namespace App\Type;

class SelectType extends InputType implements TypeInterface
{
    public string $attributes;
    public function build(object $field): string
    {
        $this->attributes = parent::getAttributes($field);
        $template = '<select name="'.$field->name.'" id="'.$field->name. '" ' . $this->attributes .' >';

        foreach ($field->values as $value) {
            $template .= '<option value="'.$value->value.'">'.$value->text.'</option>';
        }

        $template .= '</select>';

        return $template;
    }
}