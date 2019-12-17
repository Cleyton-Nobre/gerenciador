<?php
require_once 'lib/tc/tcpdf.php';
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetAuthor('Finnac');
$pdf->SetTitle('Relatório Mensal');
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'FINNAC',  'Gerenciamento', array(0,0,0), array(0,0,0));
$pdf->setFooterData(array(0,0,0), array(0,0,0));
// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->AddPage();

$html ='    <p><b>Nome:</b> Cleyton Nobre</p>
            <p><b>Email:</b>luancleyton51@gmail.com</p><br>
         
        <h2>Contas pagas</h2>
        <table>
            <tr>
                <td ><b>Nome Fornecedor</b></td>
                <td ><b>Nome conta</b></td>
                <td ><b>Tipo</b></td>
                <td ><b>Valor pago</b></td>
                <td ><b>Resta á pagar</b></td>
            </tr>
            <tr>
                <td >Elian Becali</td>
                <td >Gás</td>
                <td >Cartão</td>
                <td >500,00</td>
                <td >200,00</td>
            </tr>
            <tr>
                <td >Karina</td>
                <td >Água</td>
                <td >Dinheiro</td>
                <td >150,00</td>
                <td >125,00</td>
            </tr>
    </table><br>

        <h2>Contas recebidas</h2>

        <table >
            <tr>
                <td ><b>Nome Cliente</b></td>
                <td ><b>Nome conta</b></td>
                <td ><b>Tipo</b></td>
                <td ><b>Valor pago</b></td>
                <td ><b>Resta á pagar</b></td>
            </tr>
            <tr>
                <td >Diego Fernandes</td>
                <td >Fármacia</td>
                <td >Cartão</td>
                <td >254,00</td>
                <td >90,90</td>
            </tr>
    </table>';
       


$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

ob_end_clean();
$pdf->Output('Relatório Mensal.pdf', 'I');
?>