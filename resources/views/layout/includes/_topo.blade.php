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
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/functions2.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/scriptAbas.js')}}"></script>

	</head>
	<body>
      <!--Início menu -->
			<nav class="nav navbar navbar-expand-xl fixed-top navbar-light testeNav">
				<a id="logo_labted" class="navbar-brand" href="{{url('/home')}}">
					<img alt="Brand" src="{{asset('img/logo_thinkted.png')}}" width=150>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle naviagtion">
	   				<span class="navbar-toggler-icon"></span>
	  			</button>
				<div class="collapse navbar-collapse" id="navbarCollapse" >
					<ul class="navbar-nav">
						<li class="nav-item "><a class="scroll nav-link" href="{{url('/')}}">Home</a></li>
						<li class="nav-item "><a class="scroll nav-link {{$quemSomos or ''}}" href="{{url('/#quemSomos')}}">Quem somos</a></li>

						<!-- Dropdown projetos -->
						<div class="dropdown">
							<li class="nav-item"><a class="scroll nav-link" href="{{url('/#linhas_de_pesquisa')}}">Linhas de pesquisa</a></li>
						</div>
						<!-- Fim dropdown projetos -->

						<!-- Dropdown repositório -->
						<div class="dropdown">
							<li class="nav-item"><a class="scroll nav-link dropdown-toggle {{$repositorio or ''}} href="{{url('#repositorio')}}">Repositório</a></li>
							<div class="dropdown-content">
								<a href="{{route('repositorio')}}" class="click_softwares">Software</a>
								<a href="{{route('repositorio')}}" class="click_jogos">Jogos</a>
							</div>
						</div>
						<!-- Fim dropdown repositório -->


						<li class="nav-item"><a class='nav-link {{$public or ''}}' href="{{route('publicacoes')}}" target="_blank">Publicações</a></li>
						<li class="nav-item "><a class='nav-link {{$galeria or ''}}' href="{{route('galeria')}}" target="_blank">Galeria</a></li>
						<li class="nav-item "><a class='nav-link {{$parceiros or ''}}' href="{{route('parceiros')}}" target="_blank">Parceiros</a></li>
						<li class="nav-item"><a class='nav-link {{$contato or ''}}' href="{{route('contato')}}" target="_blank">Contato</a></li>
					</ul>
				</div>
			</nav>
			<!-- Fim menu -->
