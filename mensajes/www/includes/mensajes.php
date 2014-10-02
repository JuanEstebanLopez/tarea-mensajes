<?php



// echo '<div> <div class="separador"></div> <div class="mensaje"> <article> <div class="likes">	<div class="ima ima_mensaje"> <figure>
// 								<img src="data/'.$imagen.'"> </figure> </div> <br>';
// 					echo '=)'.$likes.'<br>';
// 					echo '-.-'.$nolikes.'<br>';
// 					echo '=('.$dislikes.'<br>';
// 					echo '</div> <div class="info" > <h2 style="float: left;">'.$comentador.' </h2>';
// 					echo '<h3 style="float: right;">'.$fecha.'</h3>';
// 					echo '<div class="comentario" style="clear: both; "><p>'.$comentario.'</p></div></div></article></div></div>';


// arma el html de los mensajes usando las variables del mensaje

echo '<div> <div class="separador"></div> <div class="mensaje"> <article> <div class="comentador">	<div class="ima ima_mensaje"> <figure>
								<img src="data/'.$imagen.'"> </figure> </div> <br> <h3>'.$comentador.'</h3> </div>';
								
					echo ' <div class="info">';
					echo '<div class="comentario" style="clear: both; "><p>'.$comentario.'</p></div>
					 <div class="fecha_comentario">	
						<h3>'.$fecha.'</h3>
						<div class="likes">	
							 <a  class="voto" href="includes/likes.php?mensaje='.$identi.' &  tipo=0">! '.$likes.'</a>  <a  class="voto" href="includes/likes.php?mensaje='.$identi.' &  tipo=1"># '.$nolikes.' </a>   <a  class="voto" href="includes/likes.php?mensaje='.$identi.' &  tipo=2">" '.$dislikes.'</a>  | <a  class="fav voto " href="includes/likes.php?mensaje='.$identi.' &  tipo=4"> '.$fav.'</a> </div>
							</div>
					</div></article></div></div>';
						



?>
