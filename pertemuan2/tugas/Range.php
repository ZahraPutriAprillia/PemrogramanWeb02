<?php
$nama = $_GET["nama"];               
$matkul = $_GET["matkul"];
$uts = $_GET["uts"];
$uas = $_GET["uas"];
$praktikum = $_GET["praktikum"];
$grade = ($uts + $uas + $praktikum) / 3;

echo "Nama : $nama <br> ";
echo "Mata Kuliah : $matkul <br> ";
echo "Nilai UTS : $uts <br>";
echo "Nilai UAS : $uas <br> ";
echo "Nilai Praktikum : $praktikum <br> ";
echo "Rata-Rata Nilai : " . round($uts + $uas +$praktikum) / 3 ;

echo("<br>");
if ($grade>=85)
echo("Grade : <b>A</b>");
elseif ($grade>=70)
echo("Grade : <b>B</b>");
elseif ($grade>=55)
echo("Grade : <b>C</b>");
elseif ($grade>=40)
echo("Grade : <b>D</b>");
elseif ($grade>=0)
echo("Grade : <b>E</b>");
elseif ($grade<=0)
echo("Grade : <b>l</b>");
elseif ($grade>=100)
echo("Grade : <b>l</b>");
?>