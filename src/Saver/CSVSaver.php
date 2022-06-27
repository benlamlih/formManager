<?php

namespace App\Saver;

class CSVSaver implements SaverInterface
{

    public static function save($filename, $data)
    {
        $f = fopen($filename.".csv", 'w');
        if ($f === false) {
            die('Error opening the file ' . $filename);
        }
        fputcsv($f, $data);
        fclose($f);
    }
}