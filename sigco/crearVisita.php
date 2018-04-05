<?php
include_once 'dbCon.php';
 
// Escape user inputs for security
$rutVecino = mysqli_real_escape_string($db, $_REQUEST['rutVecino']);
$rutAdmin = mysqli_real_escape_string($db, $_REQUEST['rutAdmin']);
$fecha = mysqli_real_escape_string($db, $_REQUEST['fecha']);
$descripcion = mysqli_real_escape_string($db, $_REQUEST['descripcion']);
$importe = mysqli_real_escape_string($db, $_REQUEST['importe']);

//estado indica si la ficha fue pagada -> 0: no pagada, 1: pagada
$estado = 0;

$ID = 0;
$sql2 = "SELECT id FROM fichas";
$result = $db->query($sql2);
if($result>=$ID)
{
	$ID=$result+1;
}



// attempt insert query execution
$sql = "INSERT INTO fichas (id, rut_vecino, rut_administrador, fecha, descripcion, importe, estado) VALUES ('$ID', '$rutVecino', '$rutAdmin', '$fecha', '$descripcion', '$importe', '$estado')";

if(mysqli_query($db, $sql)){
    echo "Ficha de visita creada con éxito.";
} else{
    echo "ERROR: No se pudo ejecutar: $sql. " . mysqli_error($db);
}
 
// close connection
mysqli_close($db);
?>