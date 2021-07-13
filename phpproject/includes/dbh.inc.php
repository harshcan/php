<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject";

$conn = mysqli_connect($serverName , $dBUsername ,$dBPassword, $dBName);

if($conn == false){
    dir('Error: Cannot connect');
}

?>