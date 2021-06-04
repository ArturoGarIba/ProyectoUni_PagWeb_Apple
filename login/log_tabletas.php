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
	<title>Iphone</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo_tablets.css">
</head>

<body>

<div class="container" id="ini">
		<header>
			<div class="row d-flex aling-items-center">
				<div class="cold-4 col">
					<img src="img/app.png">
					<a href="#" class="blog-logo text-light">APPLE</a>
				</div>
				<div class="cold-4  col">
					
				</div>
				<div class="cold-4 col">
					
				</div>
				<div class="cold-4 col">
					<div class="row d-flex aling-items-center">
						<div class=" col">
						<a href="login.php" class="btn btn-primary">Login</a>			
							<button type="button" class="btn btn-primary" onclick="location.href='reg_usuario/reg_usuario.html'" id="btn_registro">Registrarse</button> 

							
						</div>
					</div>
				</div>
            </div>
		</header>
		
	<div class="nav-scroller mb-2">
			<nav class="nav d-flex justify-content-between">
				<a href="celulares.php" class="p-2 text-white">CELULARES</a>
				<a href="tabletas.php" class="p-2 text-white">TABLETAS</a>
				<a href="watch.php" class="p-2 text-white">WATCH</a>
			</nav>
		</div>
		<div class="nav-scroller mb-2">
			<nav class="nav d-flex justify-content-between">
				<a href="ipad.php" class="p-2 text-white">Ipad</a>
				<a href="ipadMini.php" class="p-2 text-white">Ipad Mini</a>
				<a href="ipadAir.php" class="p-2 text-white">Ipad Air</a>
				<a href="ipadPro.php" class="p-2 text-white">Ipad pro</a>
			</nav>
		</div>

	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="#" class="blog-logo text-dark">iphone 11 pro
						
					</a>
					<h6 class="blog-logo text-dark">
					Como una computadora. Como ninguna.
Combina la potencia y la capacidad de una computadora con la versatilidad.s
Desde $7,999 
</h6>

				</div>
				<div class="col">
					<img src="img/ipad.jpg">
					<button class="btn btn-success">COMPRAR</button>
				</div>
			</div>

			







			<div class="row">
				
			</div>
		</div>
	</div>
	<div class="jumbotron" name="ipadd" id="ipadd">
		<div class="container">
			<div class="row">
			<h6 class="blog-logo text-black ">
					Con el iPad puedes hacer varias cosas a la vez, como sólo un profesional del multitasking puede hacerlo. 
					Edita fácilmente un documento mientras buscas información en Internet y hablas con un compañero de trabajo por FaceTime.
					 Organiza todos tus archivos en un solo lugar con la app Archivos.
</h6>
				<div class="col">
				</div>
			</div>

</body>
</html>