<?php
require_once '../src/Util/Autoloader.php';

Autoloader::register();

$generator = new FormGenerator();
$formView = $generator->build('contact');

echo $formView;