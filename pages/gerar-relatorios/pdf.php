<?php

require_once 'lib/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();



$mpdf->SetHeader('FINNAC');
$mpdf->WriteHTML('Hello World');

ob_end_clean();
$mpdf->Output('Relatório Mensal.pdf', 'I');

?>