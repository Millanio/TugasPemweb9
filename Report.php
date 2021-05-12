<?php

// Menggunakan composer php spreadsheet
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Inisiasi variabel
$spreadsheet= new Spreadsheet();
$sheet= $spreadsheet->getActiveSheet();
// Mencetak data ke excel
$sheet->setCellValue('A1','Hello World ! ');

// Menyimpan file excel
$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
?>