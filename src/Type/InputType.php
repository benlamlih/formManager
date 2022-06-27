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
        }
        return $attributes;
    }

}