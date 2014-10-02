<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf8">
	<link rel="stylesheet" hreF="css/styles.css"> 
</head>
<body>

	
	<?php
	if(isset($_GET["mensaje"])){
		if($_GET["mensaje"]<>""){
			echo "<h3>".$_GET["mensaje"]."</h3>";
		}
	}


	echo '<!-- formulario que recibe el nombre y la contraseña con el cual se puede ingresar o registtrar -->
	<form name="formulario prueba" id="formulario_registro" method="GET" action="includes/iniciosesion.php">
		<label>Nombre:  </label><br> <select name="nombre">';
		 // <input type="text" name="nombre" id="nombre"  class="formulario_datos"><br> 
		
		include_once("includes/database.php");

// selecciona todo los campos de la tabla de notas
		$query = "SELECT nombre, correo FROM mensajes.usuarios";
		$resultado=mysqli_query($conexion,$query);
		while ($row = mysqli_fetch_array($resultado)) {
			echo '<option value="'.$row["correo"].'">'.$row["nombre"].'</option>';
		}
		echo '</select> <br>';
		echo '<label>Contraseña:	</label><br><input type="password" name="contrasena" id="contrasena"  class="formulario_datos"><br><br>
		<input type="submit" value="entrar" name="entrar" id="entrar" class="formulario_datos"> <input type="submit" value="registrar" name="registrar" id="registrar" class="formulario_datos" >
	</form>';

	?>



	

</body>
</html>