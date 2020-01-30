@extends('layout.site')

@section('titulo','Notícia')

@section('conteudo')
<!--Inicio Galeria-->
<div class="container" >
		<nav labelfor="breadcrumb" class="caminho">
			<div id="caminho" class="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="{{route('noticias')}}">Notícias</a></li>
			    <li class="breadcrumb-item active" aria-current="page">{{$noticia->titulo}}</li>
			  </ol>
			</div>
		</nav>
		<h2 class="tituloPagSecund title-not">{{$noticia->titulo}}</h2>
		<h5 class="subtitulos-noticia text-secondary">{{$noticia->descricao_curta}}</h5>
		<div class="text-center">
			<img class="img-fluid img-noticia" src="{{asset($noticia->imagem)}}" alt="">
		</div>
		<div class="descricao-noticia">
			<?php
			 echo $noticia->descricao_longa;
			 ?>
		</div>
</div> <!--Fim container-->
<!--Fim Notícia -->
</div>
@endsection
