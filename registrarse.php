<?php

require("conexion.php");

if( isset($_POST['btnEnviar'])){
	$usuario = htmlentities($_POST['usuario'], ENT_QUOTES);
	$clave = htmlentities($_POST['clave'], ENT_QUOTES);
	$nombre = htmlentities($_POST['nombre'], ENT_QUOTES);
	$apellido = htmlentities($_POST['apellido'], ENT_QUOTES);
	$imagen = htmlentities($_POST['imagen'], ENT_QUOTES);
	$nacionalidad = htmlentities($_POST['nacionalidad'], ENT_QUOTES);
	$sql = "SELECT loginU, claveU, nombreU, apellidoU, tipoU, imagenU, nacionalidadU FROM usuarios WHERE loginU = '$usuario'";

	$buscar = $pdo->query($sql);

	if( $buscar->rowCount() == 0){

	$sql = "INSERT INTO usuarios (loginU, claveU, nombreU, apellidoU, tipoU, imagenU, nacionalidadU) VALUES ('$usuario', '$clave', '$nombre', '$apellido', 'U', '$imagen', '$nacionalidad' )";
	$agregar = $pdo->query($sql);
	header('location:index.php?m=Usuario nuevo registrado con exito');
	} else {
	header('location:registrarse.php?m=Usuario ya existe');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro usuario</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/estilo.css" />
</head>
<header>
    <h1>FORO ABIERTO</h1>
</header>
<hr>
<body>
	<h2> <?php if(isset($_GET['m'])){ echo $_GET['m']; } ?>  </h2>
<form name="form1" id="form1" method="post" action="registrarse.php" onsubmit="return valida();">
	<h3>Registrar nuevo usuario </h3>
	<div>
		<label class="label" for="usuario">Usuario</label>
		<input type="text" name="usuario" id="usuario" />
	</div>
	<div>
		<label class="label" for="clave">Clave</label>
		<input type="password" name="clave" id="clave" />
	</div>
	<div>
		<label class="label" for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" />
	</div>
	<div>
		<label class="label" for="apellido">Apellido</label>
		<input type="text" name="apellido" id="apellido" />
	</div>
	<div>
		<label class="label" for="imagen">Imagen</label>
		<input type="file" name="imagen" id="imagen" />
	</div>
	<div>
		<label class="label" for="nacionalidad">Nacionalidad</label>
		<input type="text" name="nacionalidad" id="nacionalidad" />
	</div>
	<div class="centro">
		<input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" />
		<input type="reset" name="btnLimpiar" id="btnLimpiar" value="Limpiar">
	</div>
	<a href="index.php" style="color:skyblue">Inicio</a>
</form>
<hr>
</body>
</html>