<?php
$raw = file_get_contents('../config/form/contact.json');
$formConfig = json_decode($raw);

$template = '<form>';

foreach ($formConfig->form->fields as $field) {
    $template .= '<div>';

    switch ($field->type){
        case 'text':
            $template .= '<input type="text" name="'.$field->name.'">';
            break;
        case 'textarea':
            $template .= '<textarea name="'.$field->name.'"></textarea>';
            break;
        case 'checkbox':
            $template .= '<input type="checkbox" name="'.$field->name.'">';
            break;
        case 'select':
            $template .= '<select name="'.$field->name.'">';

            foreach ($field->values as $value) {
                $template .= '<option value="'.$value->value.'">'.$value->text.'</option>';
            }

            $template .= '</select>';
            break;
    }

    $template .= '</div>';
}

$template .= '</form>';

echo $template;