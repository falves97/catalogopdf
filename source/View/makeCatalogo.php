<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Source\Controller\LoadProductController;

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->getOptions()->setChroot(__DIR__ . "/../");
$dompdf->getOptions()->setIsRemoteEnabled(true);

$tamplate = file_get_contents("html/template.html");
$modelo = file_get_contents("html/modelo.html");


$loadProductController = new LoadProductController($tamplate, $modelo);

$html = $loadProductController->makeTemplate();
//echo $html;
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("catalogo.pdf", ["Attachment" => "0"]);


