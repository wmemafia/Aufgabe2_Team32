<?php
require_once('world_data_parser.php');

$parser = new WorldDataParser();
$data = $parser->parseCSV('../data/world_data.csv');
$text =  "";

echo('<pre>');
print_r($data);
echo('</pre>')


?>