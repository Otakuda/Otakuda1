<?php
require("config.php");

$q = mysqli_query($conn, "SELECT * FROM markers") ;

header('Content-type: text/xml');
$writer = new XMLWriter();

$writer->openUri('php://output');
$writer->startDocument();
$writer->startElement('results');
$writer->startElement('markerss');

foreach($q as $row)
{
    $writer->startElement('marker');


    foreach($row as $name => $value) {
        $writer->startElement($name);
        $writer->text($value);
        $writer->endElement();
    }

    $writer->endElement();
}


$writer->endDocument();

?>