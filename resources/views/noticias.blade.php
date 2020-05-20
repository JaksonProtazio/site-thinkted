@extends('layout.site')

@section('titulo','Notícias')

@section('conteudo')
<!--Inicio Noticias-->
<div id="geral" class="container" align="center">
	<h2 class="tituloPagSecund"> Últimas Notícias </h2>
	<h3 class="subtituloPagSecund text-secondary"> Confira aqui o que aconteceu no nosso laboratório...</h3>

	<div id="secaoNoticia" class="list-group">
		@foreach($reverse as $noticia)
			@if($noticia->tipo != 'banner')
				@if($noticia->arquivado != 'sim')
					<a href="{{route('ver.noticia',$noticia->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="media card-noticia">
						<div class="imgNoticia">
							<img class="align-self-start mr-3 card-imgNoticias" src='{{$noticia->imagem}}' alt=''>
						</div>

						<div class="media-body float-right texto-noticia">
							<h5 class="mt-0 " align="left">{{$noticia->titulo}}</h5>
							<p align="left " class="font-italic">{{$noticia->descricao_curta}}</p>
						</div>
					</div>
					</a>
				@endif
			@endif
		@endforeach
	</div>

	<div class="paginacao">
		@if($cont>$max_noticias)
			{{$reverse->links('paginacao')}}
		@endif
	</div>

</div>
</div>
@endsection
