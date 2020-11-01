<!DOCTYPE html>
<html lang="en">


<?php 
	$title = "Contacto";
	require_once('head.php');
?>

<body>
	<?php
		require('sidebar.php');
		?>

	

			<!-- formulario -->
    
  <div class="mt-5 pt-2 mb-5 d-block">
	<div class="container text-center pt-5 mt-5 mision rounded shadow">
	   <img src="img/logo.recort.png" alt="Logo" width="100px">
		<form class="pb-2">
	<div class="form-row pt-5">
	
	  <div class="form-group col-md-4">
		<label for="inputNombre">Nombre</label>
		<input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
	  </div>
	  
	  <div class="form-group col-md-4">
		<label for="inputNombre">Apellido</label>
		<input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
	  </div>

	  <div class="form-group col-md-4">
		  <label for="inputEmail">Email</label>
		  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
		</div>
	</div>
	
	<div class="form-row text-center">
	  <div class="form-group col-lg-6 col-sm-12 col-md-6">
		<label for="inputPhone">Telefono</label>
		<input class="form-control" type="tel" placeholder="+54 9 11 5532 8921" id="example-tel-input">
	  </div>
	  
	  <div class="form-group col-lg-6 col-sm-12 col-md-6">
		<label for="inputArea">Area</label>
		<select id="inputArea" class="form-control text-center">
		  <option selected>Recursos Humanos</option>
		  <option>IT</option>
		  <option>Cobranzas</option>
		  <option>Marketing</option>
		  <option>Soporte</option>
		  <option>Contabilidad</option>
		  
		</select>
	  </div>
	  
	</div>
	<div class="form-group">
	  <label for="textArea">Comentario</label>
	  <textarea class="form-control" id="textArea" rows="8"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
	</div>
</div>
<!-- fin formulario -->
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