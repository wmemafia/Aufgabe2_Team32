<?php

class WorldDataParser {

    public function parseCSV(string $path) {
        $data = array();
        if(($handle = fopen($path, "r")) !== FALSE) {
            $i = 0;
            while (($line = fgetcsv($handle)) !== FALSE) {
                $data[$i] = $line;
                $i++;
            }
            
            return $data;
        }
    }

}



?>