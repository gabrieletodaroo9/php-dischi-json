<?php 

$jsonString=file_get_contents("disks.json");

$disks=(json_decode($jsonString,true));
 
// var_dump($disks);