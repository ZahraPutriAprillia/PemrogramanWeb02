<?php
if(isset($_GET["submit"])){
$nama = $_GET["nama"];
$matkul = $_GET["matkul"];
$uts = $_GET["uts"];
$uas = $_GET["uas"];
$praktikum = $_GET["praktikum"];

echo "Nama : $nama <br> ";
echo "Mata Kuliah : $matkul <br> ";
echo "Nilai UTS : $uts <br>";
echo "Nilai UAS : $uas <br> ";
echo "Nilai Praktikum : $praktikum ";
echo "Rata-Rata Nilai: " . round($uts + $uas +$praktikum) / 3;
echo "Grade : ";
} else {
    echo "Tidak ada Data!";
}