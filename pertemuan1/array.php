<?php
//array index
$animals = ["Kucing", "Ayam", "Kelinci"];

//akses array
foreach($animals as $animal){
    echo $animal . "<br>";
}
//array assosiatif
$student = [
    "name" => "Zahra putri A",
    "major" => "Informatic",
    "age" => 17
];

echo $student["name"];