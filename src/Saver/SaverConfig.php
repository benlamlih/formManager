<?php

namespace App\Saver;

class SaverConfig
{
    public function getData($filename){
        $className = new CSVSaver();
        $className::save($filename, $_POST);
    }

}