<?php
$hostname="localhost";
$database="tienda";
$userbd="root"; 
$passwordbd="";


$mysql= new mysqli($hostname, $userbd, $passwordbd, $database);

if ($mysql->connect_error) {
    $error_conect="fallo en la conexion";
}else{
    $error_conect=false;
}
