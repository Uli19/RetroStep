<?php
$servername = "localhost";
$username = "root";
$password = "psyduck56";
$dbname =  "retrostepdb";

$conexion = new mysqli($servername,$username,$password,$dbname);

if($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>