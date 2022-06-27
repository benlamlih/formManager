<?php

namespace App\Saver;

class SaverConfig
{
    public function getData($filename){
        $data = array(implode(",", $_POST));
        var_dump($data);
        $className = new CSVSaver();
        $className::save($filename, $data);
    }

}