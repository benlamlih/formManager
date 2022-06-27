<?php

namespace App\Saver;

class CSVSaver implements SaverInterface
{

    public static function save($filename, $data)
    {
        $headers = array_keys($data);
        var_dump($headers);
        $fn = $filename.date('Ymdhis').".csv";
        $f = fopen($fn, 'a');
        if ($f === false) {
            die('Error opening the file ' . $fn);
        }
        fputcsv($f, $headers);
        fputcsv($f, $data);
        fclose($f);
    }
}