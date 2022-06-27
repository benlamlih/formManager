<?php
require_once '../src/Util/Autoloader.php';

use App\FormGenerator;
use App\Util\Autoloader;
use App\Saver\SaverConfig;

Autoloader::register();

$generator = FormGenerator::get();
$formView = $generator->build('contact');
$saver = new SaverConfig();
$saver->getData('contact');
echo $formView;