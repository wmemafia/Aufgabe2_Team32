<?php

class WorldDataParser {

    public function parseCSV($path) {
        $data = array();
        if(($handle = fopen($path, "r")) !== FALSE) {
            $i = 0;
            $head = fgetcsv($handle);
            while (($line = fgetcsv($handle)) !== FALSE) {
                for($j = 0; $j < count($head); $j++) {
                    $data[$i][str_replace(' ', '_', trim($head[$j]))] = $line[$j];
                }
                $i++;
            }
            
            return $data;
        }
    }

    /**
    * #TODO: add return value (boolean)
    */

    public function saveXML(array $data) {
        $handle = fopen('../data/world_data.xml', 'w');
        $content = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $content .= '<Countries>'  .PHP_EOL;
        for($i = 0; $i < count($data); $i++) {
            $content .= '<Country>' . PHP_EOL;
            foreach($data[$i] as $key => $value) {
                $content .= '<' . $key . '>' . trim($value) . '</' . $key . '>' . PHP_EOL;
            }
            $content .= '</Country>' . PHP_EOL;
        }
        $content .= '</Countries>';
        fwrite($handle, $content);
        fclose($handle);
    }

    public function printXML($XMLPath, $XSTLPath) {
        $xml = new DOMDocument();
        $xml->load($XMLPath);

        $xsl = new DOMDocument();
        $xsl->load($XSTLPath);

        $xsltprocessor = new XSLTProcessor();
        $xsltprocessor->importStylesheet($xsl);

        return $xsltprocessor->transformToXML($xml);

    }

}



?>