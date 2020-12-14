<?php

	require('conexion.php');  

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Foro</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<header>
    <h1>FORO ABIERTO</h1>
    <?php 
    session_start();
    echo 'Usuario: ';
    echo $_SESSION["nombre"];
    echo ' ';
    echo $_SESSION["apellido"]; ?>
    <a href="cerrarsesion.php" style="color:skyblue"> (Cerrar Sesión) </a>
</header>
<hr>
<body>
<form name="form1" id="form1" method="post" action="agregarPublicacion.php" enctype="multipart/form-data">
<div class="d">
    <label class="label" for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" rows="5" cols="62"></textarea> 
</div>
<div class="centro">
    <input type="submit" name="btnEnviar" id="btnEnviar" value="Publicar">
</div>
</form> 
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Mensaje</th>
    </tr>
    <?php 
        //Listar
        $sql = "SELECT idF, nombreF, fechaF, mensajeF  FROM foro";
        $listar = $pdo->query($sql);
        foreach( $listar as $fila ){
    ?>
    <tr>
        <td> <?php echo $fila['nombreF']; ?> </td>
        <td> <?php echo $fila['fechaF']; ?> </td>
        <td> <?php echo $fila['mensajeF']; ?> </td>
    </tr>
    <?php  } ?>
</table>
<hr>
</body>
</html>