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

    /**
    * #TODO: add return value (boolean)
    */

    public function saveXML(array $data) {
        $handle = fopen('../data/wold_data.xml', 'w');
        $content = '<xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $content .= '<Countries>'  .PHP_EOL;
        for($i = 1; $i < count($data); $i++) {
            $content .= '<Country>' . PHP_EOL;
            for($j = 0; $j < count($data[0]); $j++) {            
                $elemName = str_replace(' ', '_', trim($data[0][$j]));
                $content .= '<' . $elemName . '>' . trim($data[$i][$j]) . '</' . $elemName . '>' . PHP_EOL;
            }
            $content .= '</Country>' . PHP_EOL;
        }
        $content .= '</Countries>';
        fwrite($handle, $content);
        fclose($handle);
    }

}



?>