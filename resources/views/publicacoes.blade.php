@extends('layout.site')

@section('titulo','Publicações')

@section('conteudo')
<div id="geral">

	<div class="container">
		<section id="publicacoes">
			<h2 class="tituloPagSecund">Publicações </h2>
			<h3 class="subtituloPagSecund text-secondary">Visualize ou baixe aqui as nossas publicações.</h3>
			<table class="table table-bordered ">
				<thead>
					<tr>
						<th scope="col">Ano</th>
						<th scope="col">Título</th>
						<th scope="col">Evento</th>
						<th width="30" scope="col">Ação</th>
					</tr>
				</thead>
				<tbody>
					@foreach($publicacoes as $publicacao)
						<tr>
							<td>{{$publicacao->ano}}</td>
							<td>{{$publicacao->titulo}}</td>
							<td>{{$publicacao->evento}}</td>
							<td>
									<!--Faz download do arquivo pdf-->
								<a href="{{$publicacao->dir_arquivo}}" download>
									<img src="{{asset('img\icons\open-iconic-master\png\data-transfer-download-2x.png')}}"></img>
								</a>
								<!--Vizualiza o arquivo pdf-->
								<a href="{{$publicacao->dir_arquivo}}" target="_blank">
									<img src="{{asset('img\icons\open-iconic-master\png\eye-2x.png')}}"></img>
								</a>
							</td>

						</tr>
					@endforeach
				</tbody>
			</table>

		</section>
	</div>

</div>
</div>
@endsection
