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