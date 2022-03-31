<?php
require_once "../src/FormGenerator.php";
require_once "../src/Type/TypeInterface.php";
require_once "../src/Type/EmailType.php";
require_once "../src/Type/TextType.php";
require_once "../src/Type/TextareaType.php";
require_once "../src/Type/SelectType.php";
require_once "../src/Type/CheckboxType.php";
require_once "../src/Type/SubmitType.php";

$generator = new FormGenerator();
$formView = $generator->build('contact');

echo $formView;