<?php 
//  Menggunakan composer php spreadsheet
include('Koneksi1.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Inisiasi variabel
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Kelas');
$sheet->setCellValue('D1', 'Alamat');

// Mencetak data ke excel
$query = mysqli_query($koneksi,"select * from tb_siswa");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['nama']);
    $sheet->setCellValue('c'.$i, $row['kelas']);
    $sheet->setCellValue('d'.$i, $row['alamat']);
    $i++;
}

$styleArray = [
            'borders'=> [
                'allBorders'=> [
                    'borderStyle'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

// Menyimpan file excel
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.xlsx');
?>