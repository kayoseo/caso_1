<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Listas</title>
    <link rel="stylesheet" href="../estilo.css" type="text/css" media="all" />

    <h1>LISTAS</h1>

    <?php 
        include_once '../dbCon.php';

        $sql = "SELECT id, id_pasajero FROM fichas,vecinos where fichas.id_vecino=vecinos.rut";
        $result = $db->query($sql);

        if ($result->num_rows > 0) 
        {

            echo "<table border = '1'> \n";
            echo "<tr><td>Id ficha</td><td>Fecha</td></tr> \n";
        
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fecha"]. "</td></tr> \n";
            }
    
            echo "</table> \n";
        }
    ?>

</head>


</html>