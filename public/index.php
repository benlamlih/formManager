<?php
require_once '../src/Util/Autoloader.php';

use App\FormGenerator;
use App\Util\Autoloader;

Autoloader::register();

$generator = FormGenerator::get();
$formView = $generator->build('newsletter');

echo $formView;