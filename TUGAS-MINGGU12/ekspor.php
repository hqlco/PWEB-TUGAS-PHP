<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(190, 7, 'SMA UJUNGPANGKAH', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR CALON SISWA BARU', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(8, 6, 'No', 1, 0);
$pdf->Cell(28, 6, 'Nama', 1, 0);
$pdf->Cell(66, 6, 'Alamat', 1, 0);
$pdf->Cell(28, 6, 'Jenis Kelamin', 1, 0);
$pdf->Cell(18, 6, 'Agama', 1, 0);
$pdf->Cell(42, 6, 'Sekolah Asal', 1, 1);

$pdf->SetFont('Arial', '', 10);

include 'config.php';
$siswa = mysqli_query($db, "select * from calon_siswa");
while ($row = mysqli_fetch_array($siswa)) {
    $pdf->Cell(8, 6, $row['id'], 1, 0);
    $pdf->Cell(28, 6, $row['nama'], 1, 0);
    $pdf->Cell(66, 6, $row['alamat'], 1, 0);
    $pdf->Cell(28, 6, $row['jenis_kelamin'], 1, 0);
    $pdf->Cell(18, 6, $row['agama'], 1, 0);
    $pdf->Cell(42, 6, $row['sekolah_asal'], 1, 1);
}

$pdf->Output();
