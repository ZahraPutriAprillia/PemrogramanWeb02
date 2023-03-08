<?php 
$nim = $_POST ["nim"];
$nama = $_POST ["nama"];
$prodi = $_POST ["prodi"];
$gender = $_POST ["gender"];
$skill = $_POST ["skill"];
$domisili = $_POST ["domisili"];
$email = $_POST ["email"];

function skor_skill($skills){
    $result= 0;
    foreach($skills as $skill){
        $result = $result + $skill_list[$skill];
    }
    return $result;

}

echo "NIM : $nama";
echo "<br> Nama : $nama";
echo "<br> Program Studi : $prodi";
echo "<br> Jenis Kelamin : $gender";
echo "<br> Skill Programming : ";
foreach($skill as $skil) {
    echo $skil . ", "; 
}
echo "<br> Tempat Domisili : $domisili";
echo "<br> Skor Skill : " . skor_skill($skill);
echo "<br> Email : $email";

?>
