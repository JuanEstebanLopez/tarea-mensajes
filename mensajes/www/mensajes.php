<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" hreF="css/styles.css"> 
	<link rel="stylesheet" hreF="css/icomoon/style.css"> 
	<link rel="stylesheet" hreF="css/icomoon2/style.css"> 
</head>
<body>
	
	<header>


		<?php session_start();
		// pregunta si existe la sesión y la como perfil al que llega por defecto
		if(isset($_SESSION["correo"])){
			$correo=$_SESSION["correo"];	
			// comprueba si existe un correo que representa al perfil de otro usuario
			if(isset($_GET)){
				if(isset($_GET["correo"])){

					$correo=$_GET["correo"];
				}
			}
			$_SESSION['perfil']=$correo;
			include_once("includes/database.php");

			$query = "SELECT * FROM mensajes.usuarios WHERE correo='".$correo."'";
			$resultado=mysqli_query($conexion,$query);
			$row=mysqli_fetch_array($resultado);

			$correo=$row["correo"];			


			if($correo>""){ 

					// echo '<div class="ima" id="perfil"> <figure > <img src="data/'.$row["foto"].'"> </figure> </div> <div id="infopersonal"> ';

					// echo '<h1> '.$row["nombre"].' </h1> <br> <h3> Ciudad: '.$row[ "ciudad"].' </h3> <h3 style="float: right;"> Nacimiento: '.$row["nacimiento"].' </h3> <br> <h3> Teléfono: ' .$row[ "telefono"].'  </h3> <h3 style="float: right;"> Correo: '.$row["correo"].' </h3> </div>';


				echo '<div id="infoperfil"><div class="ima" id="perfil"> <figure > <img src="data/'.$row["foto"].'"> </figure> </div> <div id="infopersonal"> ';
				echo '<h1> '.$row["nombre"].' </h1> <br> <h6 style="float: right;"> <a  class="voto" href="#">Comenta aquí! </a> </h6> </div></div>';
			}else{
				echo $row["nombre"];
				die("Usuario invalido");
			}
			
		}



		?>

	</header>


	<nav>
		<ul class="menu">
			<li><a class="voto" href="#">Home</a></li>
			<li><a class="voto" href="#">About</a></li>
			<li><a class="voto" href="#">Blog</a></li>
		</ul>

		<div class = "amigos"> 
			<?php

			echo '<form name="formulario prueba" id="formulario_registro" method="GET" action="mensajes.php">
			<label>Amigos:  </label> <select name="correo">';
		 // <input type="text" name="nombre" id="nombre"  class="formulario_datos"><br> 
			include_once("includes/database.php");
	// selecciona todo los campos de la tabla de notas
			$query = "SELECT nombre, correo FROM mensajes.usuarios";
			$resultado=mysqli_query($conexion,$query);
			while ($row = mysqli_fetch_array($resultado)) {
				echo '<option value="'.$row["correo"].'">'.$row["nombre"].'</option>';
			}
			echo '</select>  <input type="submit" value="ir" name="ir" id="ir"  >
		</form>';

		?>
	</div>

</nav>




<section>

	<!-- llamar el for -->
	<?php 		
	if(isset($_SESSION["correo"])){
		$correo=$_SESSION["correo"];

		if(isset($_GET)){
			if(isset($_GET["correo"])){

				$correo=$_GET["correo"];
			}
		}
		$_SESSION['perfil']=$correo;

		include_once("includes/database.php");

		$query = "SELECT * FROM mensajes.mensajes join mensajes.usuarios on mensajes.correo=usuarios.correo WHERE mensajes.comentado='".$correo."'";
		$resultado=mysqli_query($conexion,$query);

		if($resultado<>""){



			while ($row = mysqli_fetch_array($resultado)) {

				$fav="$";
				$favoritar=true;
				$identi=$row["id"];
				$query="SELECT * FROM mensajes.favoritos WHERE usuario='".$_SESSION["correo"]."' AND  id_mensaje='".$identi."'";

				$res=mysqli_query($conexion,$query);

				if(mysqli_fetch_array($res)["id_mensaje"]<>""){
					$fav="%";
					$favoritar=false;
				}
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

	?>

</section>

<footer>
</footer>
</body>
</html>