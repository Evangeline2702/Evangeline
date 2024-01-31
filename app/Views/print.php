<?php
require_once 'F:\xampp\htdocs\SPP\vendor\autoload.php';
// require 'function.php';

$filename = "LaporanSpp.pdf";

// Send headers
header("Content-Type: application/pdf");
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header('Content-Disposition: attachment; filename="'.$filename.'"');
header("Content-Transfer-Encoding: binary ");


$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPP</title>
  <meta charset="utf-8">
</head>
<body>
 <table border="1">
   <tr>
    <th>#</th>
      <th>Code</th>
    <th>Keterangan</th>
    <th>Jumlah Harga</th>
    <th>Status Yang Lunas</th>
  </tr>';
    $no=1;
    foreach ($tampil as $key) {
    	$html .= '
    <tr>
      <td>'. $no++.'.'.'</td>
      <td>'. $key->code .'.</td>
      <td>'. $key->bulan .'</td>
      <td>Rp. '. $key->jumlah.'</td>
      <td>'.$key->status.'</td>
    </tr>
    ';
 }  
	$html .='
 </table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('php://output');

?>