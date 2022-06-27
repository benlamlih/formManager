<?php

namespace App\Type;

class InputType
{
    public function getAttributes($field): string
    {
        $attributes = "";
        if (isset($field->constraints)) {
            if ($field->constraints->required == 1){
                $attributes .= ' required';
            }
            if ($field->constraints->alphanumeric == 1){
                $attributes .= ' pattern="[a-zA-Z0-9\s]+"';
            }
            if ($field->constraints->length->min != -1){
                $attributes .= ' minlength="'. $field->constraints->length->min . '"';
            }
            if ($field->constraints->length->max != -1){
                $attributes .= ' maxlength="' . $field->constraints->length->max . '"';
            }
        }
        return $attributes;
    }

}