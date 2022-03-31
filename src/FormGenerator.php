<?php
class FormGenerator
{
    public function build(string $type): string
    {
        $config = $this->loadConfiguration($type);
        return $this->buildView($config);
    }

    private function loadConfiguration(string $type): object
    {
        $filename = sprintf('../config/form/%s.json', $type);
        $raw = file_get_contents($filename);
        return json_decode($raw);
    }

    private function buildView(object $config): string
    {
        $template = '<form>';

        foreach ($config->form->fields as $field) {
            $template .= $this->buildFieldView($field);
        }

        $template .= '</form>';
        return $template;
    }

    private function buildFieldView(object $field): string
    {
        $template = '<div>';

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

        return $template;
    }
}