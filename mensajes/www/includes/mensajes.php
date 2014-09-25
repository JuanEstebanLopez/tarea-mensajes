<?php



// echo '<div> <div class="separador"></div> <div class="mensaje"> <article> <div class="likes">	<div class="ima ima_mensaje"> <figure>
// 								<img src="data/'.$imagen.'"> </figure> </div> <br>';
// 					echo '=)'.$likes.'<br>';
// 					echo '-.-'.$nolikes.'<br>';
// 					echo '=('.$dislikes.'<br>';
// 					echo '</div> <div class="info" > <h2 style="float: left;">'.$comentador.' </h2>';
// 					echo '<h3 style="float: right;">'.$fecha.'</h3>';
// 					echo '<div class="comentario" style="clear: both; "><p>'.$comentario.'</p></div></div></article></div></div>';


echo '<div> <div class="separador"></div> <div class="mensaje"> <article> <div class="comentador">	<div class="ima ima_mensaje"> <figure>
								<img src="data/'.$imagen.'"> </figure> </div> <br> <h3>'.$comentador.'</h3> </div>';

					

					echo ' <div class="info">';
					echo '<div class="comentario" style="clear: both; "><p>'.$comentario.'</p></div>
					 <div class="fecha_comentario">	
						<h3>'.$fecha.'</h3>
						<div class="likes">	
							 <a  class="voto" href="#">! '.$likes.'</a>  <a  class="voto" href="#"># '.$nolikes.' </a>   <a  class="voto" href="#">" '.$dislikes.'</a> </div>
							</div>
					</div></article></div></div>';
						



?>
