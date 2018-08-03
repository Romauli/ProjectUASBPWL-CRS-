<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,20,'Aliran EDM Terpopuler',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'No',1,0);
$pdf->Cell(85,6,'Nama DJ EDM',1,0);
$pdf->Cell(27,6,'Peringkat',1,0);
$pdf->Cell(30,6,'Lagu Populer',1,1);


Source: https://www.musikpopuler.com/2017/06/jenis-genre-musik-edm-terpopuler.html
$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$edm = mysqli_query($connect, "select * from edm");
while ($row = mysqli_fetch_array($edm)){
    $pdf->Cell(30,6,$row['No'],1,0);
    $pdf->Cell(85,6,$row['Nama DJ EDM'],1,0);
    $pdf->Cell(27,6,$row['Peringkat'],1,0);
    $pdf->Cell(30,6,$row['Lagu Populer'],1,1); 

}

$pdf->Cell(15,7,'',0,1);
	$pdf->Cell(15,7,'',0,1);
	$pdf->Cell(15,7,'',0,1);
	$pdf->SetFont('Arial','',12);
include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    
   
}
$pdf->Cell(325,10,'Pekanbaru 3 Agustus 2018',0,1,'C');
	$pdf->Cell(325,10,'EDM ',0,1,'C');
$pdf->Output();
?>

