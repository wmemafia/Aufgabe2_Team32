<?php
require_once('world_data_parser.php');

$parser = new WorldDataParser();
$data = $parser->parseCSV('../data/world_data.csv');
$text =  "";

echo('<pre>');
foreach($data as $line) {
    foreach($line as $elem) {
        $text .= $elem ." ";
    }
    $text .= "<br />\n";    
}
echo $text;
echo('</pre>')


?>