<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        $nombre= $_SESSION["usuario"];
    } 
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Iphone</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo_celulares.css">
</head>

<body>

<div class="container" id="ini">
		<header>
			<div class="row d-flex aling-items-center">
				<div class="cold-4 col">
					<img src="../img/app.png">
					<a href="index.php" class="blog-logo text-light">APPLE</a>
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
				<a href="iphone11.php" class="p-2 text-white">Iphone 11</a>
				<a href="#" class="p-2 text-white">Iphone Xr</a>
				<a href="#" class="p-2 text-white">Iphone 8</a>
				<a href="#" class="p-2 text-white">Iphone 7</a>
			</nav>
		</div>

	<div class="jumbotron" id="iphone11" name="iphone11">
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="#" class="blog-logo text-black">Iphone 11 pro
						
					</a>
					<a class="blog-logo text-dark">
						<br>
						Nuevo sistema de tres cámaras (ultra gran angular, gran angular y teleobjetivo) 
					</a>

				</div>
				<div class="col">
					<img src="../img/images.jpg">
					<button class="btn btn-success">COMPRAR</button>
				</div>
			</div>
			
			<div class="row">
			
			</div>
		</div>
	</div>




	<div class="jumbotron" id="id2" name="id2">
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="#" class="blog-logo text-dark">
						
					</a>
					
					<a class="blog-logo text-white">
						<br>
						Y un día llegó el iPhone Pro.
El iPhone Pro tiene un revolucionario sistema de tres cámaras, muy fácil de usar, que multiplica tu capacidad creativa. 
Y trae un chip sorprendente que potencia el aprendizaje automático y redefine lo que un smartphone puede hacer. Además,
 la duración de la batería mejoró como nunca. Te presentamos un iPhone tan poderoso que tuvimos que llamarlo Pro. 
					</a>

				</div>
				
			</div>

			<div class="row">
				
			</div>
		</div>
	</div>

	<div class="jumbotron" name="id3" id="id3">
		<div class="container">
			<div class="row">
				
				<div class="col text-white">
				El primer sistema de tres cámaras que te ofrece, como siempre hace el iPhone,
					 tecnología de última generación muy fácil de usar. Podrás tomar fotos espectaculares
					  con poca luz, abarcar un campo visual hasta cuatro veces más amplio y grabar videos con una calidad que ningún otro smartphone te ofrece. Además, para editar tus videos, tendrás las mismas herramientas que ya usas para las fotos. Una experiencia nunca antes vista, que se verá en tus fotos y videos.
					
					<a href="#" class="blog-logo text-dark">
						
					</a>
					<a class="blog-logo text-white">
					</a>

				</div>
				<div class="col">
				</div>
			</div>
			
			<div class="row">
				
			</div>
		</div>
	</div>


	

</body>
</html>