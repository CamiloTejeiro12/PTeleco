
<?php

require_once("conexion.php");

session_start();

$usuario=$_SESSION['nombre_usuario'];

$error = $_GET['error'];

if ($error == "1") {
	echo '<script language = "javascript">alert("Datos incorrectos");</script>';

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">
<script src="https://kit.fontawesome.com/a076d05399.js" ></script>

</head>
<body>

<title>Clientes</title>

<div class="sidebar">
<a href="../home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Usuarios/usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
</div>

<center>

<div class="main" class="container" style="background-color:#f1f1f1">
 
<table>
		<th style = "width: 500px">
				<h1>Agregar Cliente: </h1>
				<div>
				<a href="clientes.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "insertar_cliente.php" method = "POST">
						<input type="number" name="cedula_cli" min="1" max="2147483647" placeholder="cedula Cliente">
						<br><br>
						<input type="text" name="nombre_cli" required maxlength="30" size="30" placeholder="Nombres">
						<br><br>
						<input type="text" name="apellidos_cli" required maxlength="30" size="30" placeholder="Apellidos">
						<br><br>
						<input type="date" name="fecha_nacimiento_cli" placeholder="Fecha de nacimiento">
						<br><br>
						<input type="number" name="telefono_cli" min="1" max="2147483647" placeholder="Telefono">
						<br><br>
						<input type="text" name="direccion_cli" required maxlength="50" size="50" placeholder="Direccion">
						<br><br>
						<button type="submit">Ingresar</button>
					</form>
			</th>
	</table>



</div>
</center>
   
</body>
</html> 

