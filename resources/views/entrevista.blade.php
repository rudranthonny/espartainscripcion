<!DOCTYPE html>
<html lang="es-ES">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Esta descripción es la que aparece en los buscadores debajo de la URL" />
	<link href="{{asset('css/practica7.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/formulario.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/resets.css')}}" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700,800&display=swap" rel="stylesheet">
	<title>Registro</title>
</head>

<body>
	<header>
		<a href="" class='logo'>
			<img src="{{asset('img/insignia.png')}}" />
		</a>
		<nav>
			<a class="ultimos" href="">Últimos artículos</a>
			<a href="https://corporacionesparta.edu.pe/">Plataforma Virtual</a>
			<a href="">Tecnología</a>
		</nav>
		<div class="options">
			<img src="{{asset('img/Search.png')}}" />
			<img src="{{asset('img/User.png')}}" />
			<!-- <div class="userMenu">
					<a href="">Login</a>
					<a href="">Registrarme</a>
				</div> -->
		</div>

	</header>
	<main>
		<h1>Ficha de Inscripción de la Corporación Educativa Esparta</h1>
		<hr>
		<center><img src="{{asset('img/espartabc.jpeg')}}" alt="" height="15%" width="15%" ></center>
        @livewire('registrar-entrevistas')
        @livewireScripts
    </main>
</body>
</html>