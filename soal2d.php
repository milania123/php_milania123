<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $umur = htmlspecialchars($_POST['umur']);
    $hobi = htmlspecialchars($_POST['hobi']);

    echo "Nama: " .$nama. "<br>";
    echo "Umur: " .$umur. "<br>";
    echo "Hobi: " .$hobi. "<br>";
}
?>