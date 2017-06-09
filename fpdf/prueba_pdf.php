<?php
require("WriteHTML.php");
$connection = new mysqli("localhost", "root", "madeinsp1", "bajamar");

if ($result = $connection->query("SELECT * FROM curso;")) {
 $pdf=new PDF_HTML();
 $pdf->AddPage();
 $pdf->SetFont('Arial','',14);
 //$pdf->Cell(40,10,'CURSOS');
 //$test = '<table><tr><th>A</th><th>B</th></tr><tr><td>1</td><td>2</td></tr></table>';
   //$pdf->WriteHTML($test);
 while($obj = $result->fetch_assoc()) {
  $pdf->WriteHTML($obj['nombre']." ".$obj['precio']." euros <".$obj['fecha'].">\n");
  $pdf->ln(10);
  $pdf->Image('logo.jpg',10,20,33,0,' ','http://www.aprenderaprogramar.com/');
  }
  $pdf->output();
 }
  $result->close();
unset($obj);
unset($connection);
?>
