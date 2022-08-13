<?php
//https://www.w3schools.com/php/func_mysqli_connect.asp
//https://www.php.net/manual/es/mysqli.quickstart.connections.php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "demo"; 

/*Estilo orientado a objetos*/
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Conexion exitosa"

?>
