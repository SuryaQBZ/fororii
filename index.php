<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/estilo.css" />
</head>
<header>
    <h1>FORO ABIERTO</h1>
</header>
<hr>
<body>
	<h2> <?php if(isset($_GET['m'])){ echo $_GET['m']; } ?>  </h2>
<form name="form1" id="form1" method="post" action="valida_usuario.php">
	<div>
		<label class="label" for="usuario">Usuario</label>
		<input type="text" name="usuario" id="usuario" />
	</div>
	<div>
		<label class="label" for="clave">Clave</label>
		<input type="password" name="clave" id="clave" />
	</div>
	<div class="centro">
		<input type="submit" name="btnEnviar" id="btnEnviar" value="Ingresar"/>
	</div>
	<a href="registrarse.php" style="color:skyblue">Nuevo Usuario</a>
</form>
<br>
<hr>
</body>
</html>