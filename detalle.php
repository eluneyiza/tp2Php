<!DOCTYPE html>
<html lang="en">


<?php 
	$title = "Detalle Producto";
    require_once('head.php');
    
?>

<body>
	
	<?php
		
		require('sidebar.php');
  
    
		?>

		

		
			<!-- ----------------------------------------| DESTACADOS | BANNER |----------------------------------------------->
        <?php 
        if(isset($_REQUEST['id_producto'])){
            $id_producto = $_REQUEST['id_producto'];
            // $id_producto = $_REQUEST['id_producto']-1;
        }else{
            $id_producto = "";
        }
        $productos = json_decode(file_get_contents('.\data\productos.json'), true);
        $producto = $productos[$id_producto-1];
        
        ?>
			<div class="card text-right">
                <div class="container col-sm-7">
                <a href=""><img src="<?php echo $producto['imagengrande']?>" class="card-img w-100" alt="adidas-astrarun"></a>
                </div>
				<div class="card-img-overlay text-center">
					<h5 class="card-title"><?php echo $producto['nombre']?></h5>
					<p class="card-text">Nuevas <?php echo $producto['nombre']?>!</p>
					<p class="card-text"><small class="text-muted">En stock!</small> </p>
				</div>
            </div>
            
            <div class="container">
                <h3 class="text-center">Descripcion</h3>
                <ul>
                    <li>Precio: $<?php echo $producto['precio']?></li>
                    <li>Talle: 37 a 40</li>
                    <li>Color: azul</li>
                    <li>Modelo: Fitness</li>
                    <li>Sexo: Masculino</li>
                    <li>Codigo articulo: <?php echo $producto['id']?></li>
                </ul>

            </div>

            <div class="container">
            <h3 class="text-center pt-2">Comentarios</h3>
            <?php
                $comentarios = json_decode(file_get_contents('.\data\comentarios.json'), true);
               
                $coms = 0;
                array_multisort($comentarios,SORT_DESC);
                  foreach($comentarios as $comentario){
                    if($comentario["id_producto"] == $id_producto){
                      
               echo" <div class='row pl-5'>";
                echo    "<ul class='text-decoration-none list-unstyled'>";
                echo        '<li>Nombre: '. $comentario['nombre'] . '</li>';
                echo       "<li>Mail:". $comentario['email'] ."</li>";
                echo       "<li>Comentario:" . $comentario['comentario'] ."</li>";
                echo        "<li>Calificacion:" . $comentario['estrellas'] . " estrellas</li>";
                echo        "<li></li>";
                echo   "</ul>";
                echo "</div>";
                echo "<hr>";
                $coms++;
                if($coms == 3){break;}
                }else {
                break;
                }
             }
            ?>
                
             
               

            </div>

            <div class="mt-5 pt-2 mb-5 d-block">
                <div class="container text-center pt-5 mt-5 mision rounded shadow">
                   <img src="img/logo.recort.png" alt="Logo" class="logo" width="100px">
                    <form class="pb-2" action="" method="POST">
                <div class="form-row pt-5">
                
                  <div class="form-group col-md-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" value="<?php $id_producto= $id_producto; echo $id_producto?>" name="nombre" class="form-control"> 
                   
                  </div>
                  
                  <div class="form-group col-md-4">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                
                  
                  <div class="form-group col-lg-4 col-sm-12 col-md-4">
                    <label for="estrellas">estrellas</label>
                    <select id="estrellas" name="estrellas" class="form-control text-center">
                      <option selected>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      
                    </select>
                  </div>
                  <div class="form-group col-12">
                  
                  <label for="comentario">Comentario</label>
                  <textarea name="comentario" class="form-control pb-2" id="comentario" rows="8"></textarea>
                  <button type="submit" class="btn btn-primary pt-2">Enviar</button>
                </div>
                </div>
                </div>
                
                
                </form>
                </div>
            </div>
            <?php
if (isset($_REQUEST['email']) && isset($_REQUEST['comentario']) && isset($_REQUEST['estrellas'])&& isset($_REQUEST['nombre'])) {

  $email = $_REQUEST['email'];
  $comentario = $_REQUEST['comentario'];
  $estrellas = $_REQUEST['estrellas'];
  $nombre = $_REQUEST['nombre'];
  date_default_timezone_set("America/Argentina/Buenos_Aires");
	$comentarios[date('YmdHisU')] = array("fecha" => date('d-m-Y H:i:s'),
  "id_producto" => $id_producto,
  "nombre"=> $nombre,
	"comentario" => $comentario,
	"estrellas" => $estrellas,
  "email" => $email,);

file_put_contents('./data/comentarios.json',json_encode($comentarios));

}
?>
			<!-- ----------------------------------------| DESTACADOS | BANNER | FIN |----------------------------------------------->

		</div>
	</div>
	<!-- ----------------------------------------| DESTACADOS | FIN |----------------------------------------------->

	<?php
		
		require('footer.php');

		?>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!--------| FILTROS RESPONSIVE ----------------------------------------------- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>

</body>

</html>