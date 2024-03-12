<?php

require_once 'grade.php';

if (!isset($_POST["submit"])) {
    header("Location: index.php");
    exit;
}

$proses = $_POST["submit"];
$nama_siswa = $_POST["namasiswa"];
$mata_kuliah = $_POST["matkul"];
$keaktifan = $_POST["keaktifan"];
$praktikum = $_POST["praktikum"];
$presensi = $_POST["presensi"];
$nilai_akhir = ($keaktifan + $praktikum + $presensi) / 3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai</title>
    <style>
        .nilai-box {
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 150px;
            border: 2px solid #3499db;
            padding: 10px;
            border-radius: 10px;
            background-color: #ecf0f2;
            
        }
    </style>
</head>
<body>
    <div class="nilai-box">
        <?php
        echo 'Nama Siswa : '  . $nama_siswa;
        echo '<br> Mata Kuliah : ' . $mata_kuliah;
        echo '<br> Nilai Keaktifan : ' . $keaktifan;
        echo '<br> Nilai Praktikum : ' . $praktikum;
        echo '<br> Presensi : ' . $presensi;
        echo '<br> Nilai Akhir : ' . $nilai_akhir;
        echo '<br> DINYATAKAN : ' . kelulusan($nilai_akhir);
        echo '<br> GRADE : ' . grade($nilai_akhir);
        ?>
    </div>
</body>
</html>
