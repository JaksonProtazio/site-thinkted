<!doctype html>
<html>
	<head>
		<meta charset = "UTF-8">
    <title>@yield('titulo')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="{{asset('/logo.ico')}}" type="image/x-icon" />
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/estiloAbas.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.min.css')}}">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/functions2.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/scriptAbas.js')}}"></script>



	</head>
	<body>
      <!--Início menu -->
			<nav class="nav navbar navbar-expand-xl fixed-top navbar-light testeNav">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle naviagtion">
	   				<span class="navbar-toggler-icon"></span>
	  			</button>
				<a id="logo_labted" class="navbar-brand" href="{{url('/home')}}">
					<img alt="Brand" src="{{asset('img/logo_thinkted.png')}}">
				</a>
				<div class="collapse navbar-collapse" id="navbarCollapse" >
					<ul class="navbar-nav">
						<li class="nav-item active"><a class="scroll" href="{{url('/')}}">Home</a></li>
						<li class="nav-item "><a class="scroll" href="{{url('/#quemSomos')}}">Quem somos</a></li>

						<!-- Dropdown projetos -->
						<div class="dropdown">
							<li class="nav-item active"><a class="scroll" href="{{url('/#linhas_de_pesquisa')}}">Linhas de pesquisa</a></li>
						</div>
						<!-- Fim dropdown projetos -->

						<!-- Dropdown repositório -->
						<div class="dropdown">
							<li class="nav-item active"><a class="scroll" href="{{url('#repositorio')}}">Repositório</a></li>
							<div class="dropdown-content">
								<a href="{{route('repositorio')}}" class="click_softwares">Software</a>
								<a href="{{route('repositorio')}}" class="click_jogos">Jogos</a>
							</div>
						</div>
						<!-- Fim dropdown repositório -->

						<!-- Dropdown publicações -->
						<div class="dropdown">
							<li class="nav-item active"><a href="{{route('publicacoes')}}" target="_blank">Publicações</a></li>
						</div>
						<!-- Fim dropdown publicações -->
						<li class="nav-item active"><a href="{{route('noticias')}}">Notícias</a></li>
						<li class="nav-item active"><a href="{{route('galeria')}}">Galeria</a></li>
						<li class="nav-item active"><a href="{{route('parceiros')}}">Parceiros</a></li>
						<li class="nav-item active"><a href="{{route('contato')}}">Contato</a></li>
					</ul>
				</div>
			</nav>
			<!-- Fim menu -->
