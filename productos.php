<!DOCTYPE html>
<html lang="en">


<?php 
	$title = "Productos";
	require_once('head.php');
?>

<body>
	<?php
		require('sidebar.php');
		?>

		
			<!-- ----------------------------------------| DESTACADOS | 6 cards |----------------------------------------------->
			
				
			
				<div class="container">
				
				<div class="row">
				<?php		
				foreach ($productos as $producto) {
					if(($producto["id_marca"] == $idMarca || $idMarca == "") && ($producto["id_genero"] == $idCategoria || $idCategoria == "")){
					
					echo '<div class="col-sm-4 pt-1">';
					echo '<div class="card-columns-fluid">';
					echo '<img src="'. $producto["imagenmini"].'" class="card-img-top" alt="'. $producto["nombre"] .'">';
					echo '<div class="card-body">';
					echo '	<h5 class="card-title">'. $producto["nombre"] .'</h5>';
					echo  '<p class="card-text"> Las nuevas ' . $producto["nombre"] .'!</p>';
					echo	'<p class="card-text "><small class="text-muted">Nuevas!</small></p> </div>';
					echo'<div class="card-footer text-center">';
					echo	'<a class="btn btn-primary" href="detalle.php?id_producto='.$producto['id'].'" role="button">Detalles aqui!</a>' ;
					echo'</div>';
					echo'</div>';
					echo'</div>';
				}
				};

				
				?>
			</div>
			</div>

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