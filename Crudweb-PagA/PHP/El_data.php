<?php
include("./MySqlConexion.php");
$id = $_GET['id'];
$nom = $_GET['nombre'];
$ape = $_GET['apellido'];
$msg = $_GET['mensaje'];

$Eliminar ="Delete from usuarios where id = $id";

$Eliminar = mysqli_query($conn, $Eliminar);

if($conn->query($sql) === TRUE){
    $response["status"] = 200;
    $response["message"] = "Eliminado";
}else{
    $response["message"] = "Hubo un error";
}
$conn -> close();


?>