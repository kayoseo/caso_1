<?php
include_once 'dbCon.php';
 
// Escape user inputs for security
$rut = mysqli_real_escape_string($db, $_REQUEST['rut']);
$nombre = mysqli_real_escape_string($db, $_REQUEST['nombre']);
$apellido = mysqli_real_escape_string($db, $_REQUEST['apellido']);
$direccion = mysqli_real_escape_string($db, $_REQUEST['direccion']);
$postal = mysqli_real_escape_string($db, $_REQUEST['postal']);
$ciudad = mysqli_real_escape_string($db, $_REQUEST['city']);
$telefono = mysqli_real_escape_string($db, $_REQUEST['phone']);
 
// attempt insert query execution
$sql = "INSERT INTO vecinos (rut, nombre, apellido, direccion, postal, ciudad, telefono) VALUES ('$rut', '$nombre', '$apellido', '$direccion', '$postal', '$ciudad', '$telefono')";

if(mysqli_query($db, $sql)){
    echo "Vecino creado con éxito.";
} else{
    echo "ERROR: No se pudo ejecutar: $sql. " . mysqli_error($db);
}
 
// close connection
mysqli_close($db);
?>