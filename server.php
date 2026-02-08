<?php

$titolo = $_POST["titolo"];
$artista = $_POST["artista"];
$cover = $_POST["cover"];
$anno = $_POST["anno"];
$genere = $_POST["genere"];

$newDisk = [
    "titolo" => $titolo,
    "artista" => $artista,
    "cover" => $cover,
    "anno" => $anno,
    "genere" => $genere
];


$disks_text= file_get_contents("disks.json");
$disks= json_decode($disks_text);
$disks[]= $newDisk;
$disk_text= json_encode($disks);
file_put_contents("./disks.json",$disk_text);
header("Location: index.php");