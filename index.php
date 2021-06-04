<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        $nombre= $_SESSION["usuario"];
        header("location: indexLogin.php");
    } 
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>APPLE</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index_estilo.css">

</head>
<body>
	<script type="text/javascript">
	function mostrar(){
	document.getElementById("login").style.display = "block";}
	function cerrar(){
		document.getElementById("login").style.display="none";
	}
	function login(){
		
	}	
	</script>
	<div class="container" id="ini">
		<header>
			<div class="row d-flex aling-items-center">
				<div class="cold-4 col">
					<img src="img/app.png">
					<a href="index.php" class="blog-logo text-light">APPLE</a>
				</div>
				<div class="cold-4  col">
					
				</div>
				<div class="cold-4 col">
					
				</div>
				<div class="cold-4 col">
					<div class="row d-flex aling-items-center">
						<div class=" col">
							<a href="login.html" class="btn btn-primary">Login</a>		
							<button type="button" class="btn btn-primary" onclick="location.href='reg_usuario/reg_usuario.html'" id="btn_registro">Registrarse</button> 

							
						</div>
					</div>
				</div>
            </div>
		</header>
	
		<div class="nav-scroller" >
			<nav class="nav d-flex justify-content-between">
				<a href="celulares.html" class="p-2 text-white">CELULARES</a>
				<a href="tabletas.html" class="p-2 text-white">TABLETAS</a>
				<a href="watch.html"  class="p-2 text-white">WATCH</a>
			</nav>
		</div>
	</div>



	<div class="jumbotron" id="principal">
		<div class="container">
			<h2 class="display-4 text-center">iphone 11 pro</h2>
			<p class="text-center" id="parrafo1">Cámaras Pro. Pantalla Pro. Rendimiento Pro.</p>
			<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
				<img src="img/images.jpg">
			</div>
			<div class="col">
				
			</div>
			</div>	
		</div>
	</div>	
	<div id="contenedor">
		<div id="login" style="display:none">
			<img src="image/user.png" class="imgIco">
		<br><br>
		<label class="lblUsu">User :</label>
		<input type="text" class="usu">
		<br><br>
		<label class="lblPass">Password :</label>
		<input type="text" class="Pass">
		<br><br><br><br><br><br><br>
		<button id="btnLogin1"><b>Login</b></button>
		<button id="btnCancel" onclick="cerrar()"><b>Cancelar</b></button>
		</div>
	</div>
	<br>
	<div class="container">
	<h2 class="display-4 text-center text-light">Encuentra el iPhone perfecto para ti.</h2>

	</div>
	<div class="container" id="teams">
		<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/iphone11pro.jpg">
      <div class="caption">
        <h3 class="text-light">Iphone 11 pro.</h3>
        <p class="text-light">Nuevo sistema de tres cámaras (ultra gran angular, gran angular y teleobjetivo)
			Hasta 20 horas de reproducción de video,
			Resistencia al agua hasta por 30 minutos a una profundidad máxima de 4 metros,
			Pantalla Super Retina XDR de 5.8 o 6.5 pulgadas</p>
        <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="btn btn-default" role="button">saber más.</a>
        </p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/iphone111.jpg">
      <div class="caption">
        <h3 class="text-light">Iphone 11</h3>
        <p class="text-light">Nuevo sistema de dos cámaras (ultra gran angular y gran angular)
			Hasta 17 horas de reproducción de video,
			Resistencia al agua hasta por 30 minutos a una profundidad máxima de 2 metros,
			Pantalla Liquid Retina HD de 6.1 pulgadas</p>
        <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="btn btn-default" role="button">saber más.</a>
        </p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/iphonex.jpg" >
      <div class="caption">
        <h3 class="text-light">Iphone x</h3>
        <p class="text-light">Sistema de cámara única (gran angular)
			Hasta 16 horas de reproducción de video
			Resistencia al agua hasta por 30 minutos a una profundidad máxima de 1 metro
			Pantalla Liquid Retina HD de 6.1 pulgadas
		</p>
		<br>
        <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="btn btn-default" role="button">saber más.</a>
        </p>
      </div>
    </div>
  </div>
</div>
	</div>
	<br>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class=" col">
				<h2 class="display-4 text-center"><trong>WATCH</trong></h2>
				<h4 class="display-4 text-center"><strong>Un reloj como nunca lo habias visto</strong></h4>

				</div>
				<div class="col">
					<img src="img/applewatch.jpg">
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container" id="final">
		<h5 class="display-6 text-center">Copyright © 2019 Apple Inc. Todos los derechos reservados. Productos apple.</h5>
	</div>
    </div>
</body>
</html>