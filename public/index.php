<?php
$raw = file_get_contents('../config/form/contact.json');
$formConfig = json_decode($raw);

$template = '<form>';

foreach ($formConfig->form->fields as $field) {
    $template .= '<div>';

    if(isset($field->label)){
        $template .= '<label for="'.$field->name.'">'.$field->label.'</label>';
    }

    switch ($field->type){
        case 'text':
            $template .= '<input type="text" id="'.$field->name.'" name="'.$field->name.'">';
            break;
        case 'textarea':
            $template .= '<textarea name="'.$field->name.'" id="'.$field->name.'"></textarea>';
            break;
        case 'checkbox':
            $template .= '<input type="checkbox" name="'.$field->name.'" id="'.$field->name.'">';
            break;
        case 'select':
            $template .= '<select name="'.$field->name.'" id="'.$field->name.'">';

            foreach ($field->values as $value) {
                $template .= '<option value="'.$value->value.'">'.$value->text.'</option>';
            }

            $template .= '</select>';
            break;
        case 'submit':
            $template .= '<button type="submit">'.$field->text.'</button>';
            break;
    }

    $template .= '</div>';
}

$template .= '</form>';

echo $template;