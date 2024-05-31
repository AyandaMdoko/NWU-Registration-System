<?php
include('dbconnect.php');
require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$dompdf = new Dompdf();

$name = $_POST["name"];
$stunum = $_POST["STUnumber"];

/**
 * Set the paper size and orientation
 */
$dompdf->setPaper("A4", "landscape");

$html = file_get_contents("POR_template.php");

$dompdf->loadHtml($html);
//$dompdf->loadHtmlFile("POR_template.php");

/**
 * Create the PDF and set attributes
 */
$dompdf->render();

$dompdf->addInfo("Title", "Proof of registration"); // "add_info" in earlier versions of Dompdf

/**
 * Send the PDF to the browser
 */
$dompdf->stream("POR.pdf", ["Attachment" => 0]);

/**
 * Save the PDF file locally
 */
$output = $dompdf->output();
file_put_contents("file.pdf", $output);