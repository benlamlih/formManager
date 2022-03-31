<?php
class SelectType
{
    public function buidView(object $field): string
    {
        $template = '<select name="'.$field->name.'" id="'.$field->name.'">';

        foreach ($field->values as $value) {
            $template .= '<option value="'.$value->value.'">'.$value->text.'</option>';
        }

        $template .= '</select>';

        return $template;
    }
}