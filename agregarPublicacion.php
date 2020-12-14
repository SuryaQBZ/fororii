<?php

    require('conexion.php');  

    session_start();
    if( isset($_POST['btnEnviar']) ){
        $nombre = htmlentities($_SESSION['nombre'], ENT_QUOTES);
        $mensaje = htmlentities($_POST['mensaje'], ENT_QUOTES);
        $fecha = date('Y-m-d', strtotime($_POST['fecha']));

        $sql = "INSERT INTO foro (nombreF, fechaF, mensajeF) VALUES ('$nombre', '$fecha', '$mensaje')";
        $agregar = $pdo->query($sql);
    }
    header('location:foro.php');
?>