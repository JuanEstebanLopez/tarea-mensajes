<?php session_start();


// INSERT INTO `likes`(`usuario`, `id_mensaje`, `tipo`) VALUES ([value-1],[value-2],[value-3])

// tipos: 0-likes 1-no 2-dislikes 3-favoritos

if(isset($_GET)){
	if(isset($_GET["mensaje"]) AND isset($_GET["tipo"])){
		$t=$_GET["tipo"];
		include_once("database.php");
		// pregunta el tipo de like que es (like, dislike, fav)
		if($t==4){
			if($favoritar=true){
				$query=	"INSERT INTO mensajes.favoritos(`usuario`, `id_mensaje`) VALUES ('".$_SESSION["correo"]."',".$_GET["mensaje"].")";
				mysqli_query($conexion,$query);
				echo $query;
			}

		}else{
			
			$up="likes";
			if($t==2){
				$up="dislikes";
			}else if($t==1){
				$up="no";
			}
			// segun el tipo de like, le suma a la cantidad de ese tipo de puntuación del mensaje
			// pide la cantidad de esa puntuación para sumarle uno y actualizarla
			$query= "SELECT * from mensajes.mensajes WHERE  id='".$_GET["mensaje"]."'";

			$resultado=mysqli_query($conexion,$query);

			$li=mysqli_fetch_array($resultado)[$up];
			$li=$li+1;


			//UPDATE  SET likes =13  WHERE id =1
			// actualiza el tipo de puntuación que había recibido
			$query = "UPDATE mensajes.mensajes SET ".$up."=".$li." WHERE id=".$_GET["mensaje"];
			mysqli_query($conexion,$query);			 


			$query="INSERT INTO `likes`(`usuario`, `id_mensaje`, `tipo`) VALUES ('".$_SESSION["correo"]."',".$_GET["mensaje"].",".$t.")";
			mysqli_query($conexion,$query);		

			
		}
		// se devuelve al perfil que estaba
		header ("Location: ../mensajes.php?correo=".$_SESSION["perfil"]);
	}
}

?>