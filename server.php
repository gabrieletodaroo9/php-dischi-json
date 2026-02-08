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

// var_dump($newDisk);
