<!DOCTYPE html>
<html lang="en">


<?php 
	$title = "Home";
	require_once('head.php');
?>
<body>
		<?php
		require('sidebar.php');
		$productos = json_decode(file_get_contents('C:\xampp\htdocs\ProgramacionWeb\PW2-G2-09-23-Ceballo-Carballal-Seijas-Iza\data\productos.json'), true);
		?>
		
		
			<!-- ----------------------------------------| DESTACADOS | BANNER |----------------------------------------------->

			<div class="card text-right">

				<a href="nike500.php"><img src="img/nike500.png" class="card-img" alt="destacado-banner"></a>
				<div class="card-img-overlay">
				<?php foreach ($productos as $producto) {
					if($producto["id"] == 1){
					echo "<h5 class='card-title'>". $producto["nombre"] . "</h5>";
					}}
				?>
					<p class="card-text">Nuevas Nike Payp 2.0 Blue Turbo!</p>
					<p class="card-text"><small class="text-muted">En stock!</small> </p>
				</div>

			</div>

			<!-- ----------------------------------------| DESTACADOS | BANNER | FIN |----------------------------------------------->

			<!-- ----------------------------------------| DESTACADOS | 6 cards |----------------------------------------------->
			<div class="card-deck">
				<div class="card">
					<a href="nike"><img src="img/nike1.jpg" class="card-img-top" alt="nike1"></a>
					<div class="card-body">
						<h5 class="card-title">Nike Cesped</h5>
						<p class="card-text">Las nuevas Nike Camuflaje cesped!</p>
						<p class="card-text "><small class="text-muted">Nuevas!</small></p>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted">En Stock!</small>
					</div>
				</div>
				<div class="card">
					<img src="img/dc2.jpg" class="card-img-top" alt="dc2">
					<div class="card-body">
						<h5 class="card-title">DC Destroy</h5>
						<p class="card-text">Solo para skaters y bikers</p>
						<p class="card-text"><small class="text-muted">Nuevas!</small></p>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted">En Stock!</small>
					</div>
				</div>
				<div class="card">
					<img src="img/reebok1.jpg" class="card-img-top" alt="reebok1">
					<div class="card-body">
						<h5 class="card-title">Reebook New Word</h5>
						<p class="card-text">Ultimo modelo de Reebook mas vendido 2019</p>
						<p class="card-text"><small class="text-muted">Temporada 2019</small></p>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted">En Stock!</small>
					</div>
				</div>

			</div>
			<div class="card-deck">
				<div class="card">
					<img src="img/converse1.jpg" class="card-img-top" alt="converse1">
					<div class="card-body">
						<h5 class="card-title">Converse Clasics</h5>
						<p class="card-text">Modelo descontinuado clasico de Converse</p>
						<p class="card-text"><small class="text-muted">Temporada 2019</small></p>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted">En Stock!</small>
					</div>
				</div>
				<div class="card">
					<img src="img/vans1.jpg" class="card-img-top" alt="vans1">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This card has supporting text below as a natural lead-in to additional
							content.</p>
						<p class="card-text"><small class="text-muted text-center">Temporada 2019</small></p>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted">En Stock!</small>
					</div>
				</div>
				<div class="card">
					<img src="img/puma1.jpg" class="card-img-top" alt="puma1">
					<div class="card-body">
						<h5 class="card-title">Puma Geek</h5>
						<p class="card-text"> Nunca dejes de ser freek, solo mujeres.</p>
						<p class="card-text"><small class="text-muted text-center">Temporada 2019</small></p>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted">En Stock!</small>
					</div>
				</div>
			</div>

			<!-- ----------------------------------------| DESTACADOS | 6 cards | FIN | ----------------------------------------------->

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