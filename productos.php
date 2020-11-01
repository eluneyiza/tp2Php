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
				$productos = json_decode(file_get_contents('C:\xampp\htdocs\ProgramacionWeb\PW2-G2-09-23-Ceballo-Carballal-Seijas-Iza\data\productos.json'), true);
		
				foreach ($productos as $producto) {
					echo '<div class="col-sm-4">';
					echo '<div class="card-columns-fluid">';
					echo '<img src="img/adidas/adidas-hombre/adidas-4787-373115-1-zoom.jpg" class="card-img-top" alt="adidas-astrarun">';
					echo '<div class="card-body">';
					echo '	<h5 class="card-title">'. $producto["nombre"] .'</h5>';
					echo  '<p class="card-text"> Las nuevas ' . $producto["nombre"] .'!</p>';
					echo	'<p class="card-text "><small class="text-muted">Nuevas!</small></p> </div>';
					echo'<div class="card-footer text-center">';
					echo	'<a class="btn btn-primary" href="'.$producto['id'].'.php" role="button">Detalles aqui!</a>' ;
					echo'</div>';
					echo'</div>';
					echo'</div>';

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