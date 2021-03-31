<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Source\Model\Data\ClientData;
use Source\Model\Data\LoadProduct;

// reference the Dompdf namespace
/*
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->getOptions()->setChroot(__DIR__ . "/../");
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("catalogo.pdf", ["Attachment" => "0"]);
*/

$client = ClientData::getInstance();
try{
    $products = LoadProduct::loadAll(); 
}
catch(Exception $e) {
    echo $e->getMessage();
}
var_dump($json);