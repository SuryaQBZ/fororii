<?php

//include('ruta/nombre.ext');
//require('ruta/nombre.ext');

require('conexion.php');

$usuario = htmlentities($_POST['usuario'], ENT_QUOTES);
$clave = htmlentities($_POST['clave'], ENT_QUOTES);

$sql = "SELECT loginU, claveU, nombreU, apellidoU, tipoU, imagenU, nacionalidadU FROM usuarios WHERE loginU = '$usuario' AND claveU = '$clave'";

$buscar = $pdo->query($sql);

if( $buscar->rowCount() > 0){

	foreach($buscar as $usu){

		session_start();
		$_SESSION['login'] = $usu['loginU'];
		$_SESSION['nombre'] = $usu['nombreU'];
		$_SESSION['apellido'] = $usu['apellidoU'];
		$_SESSION['tipo'] = $usu['tipoU'];
		$_SESSION['imagen'] = $usu['imagenU'];
		$_SESSION['nacionalidad'] = $usu['nacionalidadU'];

		if($_SESSION['tipo'] == "A"){
			header('location:foro.php');
		}
		elseif($_SESSION['tipo'] == "U"){
			header('location:foro.php');
		}
		else{ header('location:index.php?m=Usuario no valido'); }
	}
} else{
	header('location:index.php?m=Usuario no registrado');  
}




?>