<?php  session_start();

			include_once("database.php");
			$nombre = $_GET["nombre"];
			$contrasena=$_GET["contrasena"];

			// selecciona el nombre correspondiente al código
			$query= "SELECT * from mensajes.usuarios WHERE  correo='".$nombre."' AND contrasena='".$contrasena."'";
			$resultado=mysqli_query($conexion,$query);

			$usu=mysqli_fetch_array($resultado)['correo'];

			// comprueba que el usuario y contraseña sean correctos, si no son correctos se devuelve al inicio con un mensaje que dice que es incorrecto el usuario o la contraseña
			if($usu<>""){
				$_SESSION['correo']=$nombre;
				$_SESSION['perfil']=$nombre;
				$_SESSION['contrasena']=$contrasena;
				header ("Location: ../mensajes.php");


			}else{
				// si no se recive ningún dato va a la tabla de notas de todos los estudiantes
				header ("Location: ../index.php?mensaje=El usuario o la contraseña es incorrecto.");
			}


?>