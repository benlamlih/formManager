<?php

namespace App\Type;

class TypingInputType extends InputType
{

    public function getAttributes($field): string
    {
        $attributes = parent::getAttributes($field);
        if (isset($field->constraints)) {
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