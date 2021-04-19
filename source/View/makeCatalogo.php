<?php

if (defined(ABSPATH)){

}
/*
require_once __DIR__ . '/../../vendor/autoload.php';

use Source\Controller\LoadProductController;

// reference the Dompdf namespace
use Dompdf\Dompdf;



// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->getOptions()->setChroot(__DIR__ . "/../");
$dompdf->getOptions()->setIsRemoteEnabled(true);


//$loadProductController = new LoadProductController();

//$html = $loadProductController->makeTemplate();
$html = \Source\Model\Data\ClientData::url();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');


if(get_query_var('catalogoPDF')) {
    // Render the HTML as PDF
    $dompdf->render();

// Output the generated PDF to Browser
    $dompdf->stream("catalogo.pdf", ["Attachment" => "0"]);

}*/
?>