<?php
require_once "../src/FormGenerator.php";

$generator = new FormGenerator();
$formView = $generator->build('contact');

echo $formView;