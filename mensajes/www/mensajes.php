<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" hreF="css/styles.css"> 
	<link rel="stylesheet" hreF="css/icomoon/style.css"> 
</head>
<body>
	
	<header>


		<?php


		if(isset($_GET)){
			if(isset($_GET["correo"])){
				$correo=$_GET["correo"];
				include_once("includes/database.php");
				
				$query = "SELECT * FROM mensajes.usuarios WHERE correo='".$correo."'";
				$resultado=mysqli_query($conexion,$query);
				$row=mysqli_fetch_array($resultado);

				$correo=$row["correo"];			
				

				if($correo>""){ 

					// echo '<div class="ima" id="perfil"> <figure > <img src="data/'.$row["foto"].'"> </figure> </div> <div id="infopersonal"> ';

					// echo '<h1> '.$row["nombre"].' </h1> <br> <h3> Ciudad: '.$row[ "ciudad"].' </h3> <h3 style="float: right;"> Nacimiento: '.$row["nacimiento"].' </h3> <br> <h3> Teléfono: ' .$row[ "telefono"].'  </h3> <h3 style="float: right;"> Correo: '.$row["correo"].' </h3> </div>';


					echo '<div id="infoperfil"><div class="ima" id="perfil"> <figure > <img src="data/'.$row["foto"].'"> </figure> </div> <div id="infopersonal"> ';

					echo '<h1> '.$row["nombre"].' </h1> <br> <h6 style="float: right;"> Comenta aquí! </h6> </div></div>';




				}else{
					echo $row["nombre"];
					die("Usuario invalido");
				}
			}
		}



		?>

	</header>

	<section>




		<!-- llamar el for -->
		<?php

		if(isset($_GET)){
			if(isset($_GET["correo"])){
				$correo=$_GET["correo"];
				include_once("includes/database.php");
				
				$query = "SELECT * FROM mensajes.mensajes join mensajes.usuarios on mensajes.correo=usuarios.correo WHERE mensajes.comentado='".$correo."'";
				$resultado=mysqli_query($conexion,$query);

				if($resultado<>""){
					
					while ($row = mysqli_fetch_array($resultado)) {
						$imagen=$row["foto"];
						$likes=$row["likes"];
						$dislikes=$row["dislikes"];
						$nolikes=$row["no"];
						$comentador=$row["nombre"];
						$comentario=$row["comentario"];
						$fecha=$row["fecha"];
						include("includes/mensajes.php");
					}
				}else{
					echo "No hay comentarios";
				}

			}
		}

		?>


	</section>

	<footer>


	</footer>



</body>
</html>