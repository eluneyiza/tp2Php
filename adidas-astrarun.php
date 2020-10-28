<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Adidas | World Shoes </title>
	<!-- Iconos Social Media -->
	<script src="https://kit.fontawesome.com/cedf025736.js" crossorigin="anonymous"></script>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- GOOGLE FONT - Spartan 300 | 700 -->
	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;700&display=swap" rel="stylesheet">
	<!-- CSS | index.html-->
	<link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
	
	<?php
		
		require('sidebar.php');

		?>

		

		
			<!-- ----------------------------------------| DESTACADOS | BANNER |----------------------------------------------->

			<div class="card text-right">
                <div class="container col-sm-7">
                <a href="adidas-astrarun.php"><img src="img/adidas/adidas-hombre/adidas-4787-373115-1-zoom.jpg" class="card-img w-100" alt="adidas-astrarun"></a>
                </div>
				<div class="card-img-overlay text-center">
					<h5 class="card-title">Adidas Astrarun</h5>
					<p class="card-text">Nuevas Adidas Astrarun!</p>
					<p class="card-text"><small class="text-muted">En stock!</small> </p>
				</div>
            </div>
            
            <div class="container">
                <h3 class="text-center">Descripcion</h3>
                <ul>
                    <li>Precio: $5.500</li>
                    <li>Talle: 37 a 40</li>
                    <li>Color: azul</li>
                    <li>Modelo: Fitness</li>
                    <li>Sexo: Masculino</li>
                    <li>Codigo articulo: AD777SH26CMFAR</li>
                </ul>

            </div>

            <div class="container">
            <h3 class="text-center pt-2">Comentarios</h3>
                <div class="row pl-5">
                    
                    <ul class="text-decoration-none list-unstyled">
                        <li>Nombre:Kevin</li>
                        <li>Mail:prueba4952@hotmal.com </li>
                        <li>Comentario:Muy buenas zapatillas, las mejores para correr por el parque a las 6:00 AM</li>
                        <li>Calificacion: 5 estrellas</li>
                        <li></li>
                    </ul>
                </div>
                <hr>
                <div class="row pl-5">
                    <ul class="text-decoration-none list-unstyled">
                        <li>Nombre:Marlene</li>
                        <li>Mail:prueba49342@hotmal.com </li>
                        <li>Comentario: MUY FEAS!</li>
                        <li>Calificacion: 2 estrellas</li>
                        <li></li>
                    </ul>
                </div>
                <hr>
                <div class="row pl-5">
                    <ul class="text-decoration-none list-unstyled">
                        <li>Nombre:Eluney</li>
                        <li>Mail:prueba464222@hotmal.com </li>
                        <li>Comentario:Lindas zapas , un poco chicas de orma</li>
                        <li>Calificacion: 3.5 estrellas</li>
                        <li></li>
                    </ul>
                </div>

            </div>

            <div class="mt-5 pt-2 mb-5 d-block">
                <div class="container text-center pt-5 mt-5 mision rounded shadow">
                   <img src="img/logo.recort.png" alt="Logo" class="expTecho" width="100px">
                    <form class="pb-2">
                <div class="form-row pt-5">
                
                  <div class="form-group col-md-4">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                  </div>
                  
                  <div class="form-group col-md-4">
                      <label for="inputEmail">Email</label>
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                
                  
                  <div class="form-group col-lg-4 col-sm-12 col-md-4">
                    <label for="inputEstrellas">estrellas</label>
                    <select id="inputEstrellas" class="form-control text-center">
                      <option selected>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      
                    </select>
                  </div>
                  <div class="form-group col-12">
                  <label for="textArea">Comentario</label>
                  <textarea class="form-control pb-2" id="textArea" rows="8"></textarea>
                  <button type="submit" class="btn btn-primary pt-2">Enviar</button>
                </div>
                </div>
                </div>
                
                
                </form>
                </div>
            </div>

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