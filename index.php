<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>practica</title>
	<meta name="description" content="Estees un proyecto demostrativo"/>
	<link rel="stylesheet" type="text/css" media="none" onload="if(media!='all')media='all'" href="css/bootstrap2.min.css">
    <link rel="stylesheet" type="text/css" media="none" onload="if(media!='all')media='all'" href="css/z11.min.css">
    <script type="text/javascript" async src="js/main-menu.js"></script>
    <script async src="https://use.fontawesome.com/f9081222a1.js"></script> 
    <style type="text/css">	    
		.fondo-cuadros{background-image: url('img/fondo/fondo-cuadros.png')}		
    </style>
</head>
<body class="js p0">
		<div class="pattern">
		<span class="logo-principal inline-block">
			<img src="img/logos/Logo.png" alt="logo-mirador">
		</span>
		<span class="centrar-flex f1">Header</span>
		<a id="menu-link" class="menu-link cursor-pointer" onclick="toogleMenuPrincipal()">
			<img src="img/icons/ic_menu.png" alt="logo-mirador">
		</a>
		<br>
		<nav  role="navigation" class="centrar ">
			<ul class="inline">
				<li class=""><a class="block f1 md-f1_25 p1 md-p_5" href="./">Inicio</a></li>
				<li class=""><a class="block f1 md-f1_25 p1 md-p_5" href="#">Elemento1</a></li>
				<li class=""><a class="block f1 md-f1_25 p1 md-p_5" href="#">Elemento2</a></li>
				<li class=""><a class="block f1 md-f1_25 p1 md-p_5" href="#">Elemento3</a></li>
			</ul>
		</nav>
	</div>	
	</div>
    <div class="parallax xs-parallax fondo">
        <div class="h100 col-xs-12 texto-blaco">
            <article class="centrar-vertical centrar">
                <h3 class="font-poiret f1 md-f3 sobra-lijera">Pagina de prueba</h3>
                <h3 class="font-poiret font-bolder f2 md-f4 sobra-lijera">Paginas web y comercio electronico</h3>
            </article>
        </div>
    </div>
    <div>
    	<span class="font-poiret f3 texto-blanco">audio </span>
    	<audio autoplay="true" preload="true" controls loop muted>
    		<source src="06_Aprendiz.mp3" type="audio/mp3">
    	</audio>
    </div>
	<div class="container-fluid p0 fondo-cuadros bg-griseado">
		<div class="row">
			<div class="col-sm-6 p2">				
				<div class="col-xs-10 p1">
					<span class="font-poiret f3 texto-blanco">Video </span>
				</div>
				<div class="col-xs-12 justificar texto-blanco">				
					<video autoplay="true" preload="true" controls loop muted width="700px" height="450px">
					<source src="Drone Intro.mp4" type="video/mp4">
					</video>
				</div>				
			</div>
			<div class="col-sm-6 p2 texto-blanco">
				<div class="row">
					<div class="col-md-8 col-md-push-2">
						<div class="col-xs-12">
							<span class="font-poiret f3">Imagen</span>
						</div>
					</div><br><br><br>
					<hr >
					<div class="col-xs-12 arco m2">
						<img src="img/home/img.jpg" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>		
	<footer class=" conteiner-fluid foote-bs bg-grisead formas-foote texto-blanc">
		<div class="container p1">
			<div class="row">
			<span class="centrar-flex f2">footer</span>
				<div class="col-xs-12 col-md-3">
					<div class="row">
						<div class="col-xs-12">
							<span class="cursor-pointer block enlace-ancho">
								<i class="fa fa-link" aria-hidden="true"></i>
								<a href="index.html" class="texto-blanc">Inicio</a></span>
							<span class="cursor-pointer block enlace-ancho">
								<i class="fa fa-link" aria-hidden="true"></i>
								<a href="#" class="texto-blanc">Elemento1</a></span>
							<span class="cursor-pointer block enlace-ancho">
								<i class="fa fa-link" aria-hidden="true"></i>
								<a href="#" class="texto-blanc">Elemento2</a></span>
							<span class="cursor-pointer block enlace-ancho">
								<i class="fa fa-link" aria-hidden="true"></i>
								<a href="#" class="texto-blanc">Elemento4</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<section class=" font-poiret f2" style="text-align:center; margin:10px auto;"><p><a href="#" target="_blank" class="texto-blan">Alfred Dom </a></p></section>
			</div>
		</div>
	</footer>
</body>
</html>