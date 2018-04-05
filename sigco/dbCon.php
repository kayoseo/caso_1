<?php
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="sigco";
    $db = new mysqli($db_host, $db_user, $db_password, $db_name);

    if (!$db) {
        die('No se ha podido conectar a la base de datos');
    }
?>