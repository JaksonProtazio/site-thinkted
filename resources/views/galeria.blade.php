@extends('layout.site')

@section('titulo','Galeria')

@section('conteudo')
<!--Inicio Galeria-->
<div class="container" >
	<h2 class="tituloPagSecund">Galeria</h2>
	<h3 class="subtituloPagSecund text-secondary"> Confira aqui fotos de eventos, projetos e muito mais...</h3>
	<div class="album text-muted" id="albuns">
				<div class="xop-section">
					<ul class="xop-grid">
						<div class="row">
							@foreach($albuns as $album)
								<div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
									<li>
										<a href="{{ route('album',$album->id) }}">
											<div class="xop-box xop-img-1">
												<div class="box-label-capa-album">
													<img src="{{asset('adm/galeria/'.$album->titulo_album.'/capa/imagem_capa.'.$album->extensao)}}" alt="" width="200">
													<h3 class="label-capa-album">{{$album->titulo_album}}</h3>
												</div>
											</div>
										</a>
									</li>
								</div>
							@endforeach
						</ul>
					</div>
				</div>
			</div>


		</div> <!--Fim container-->
</div>

<!--Fim Galeria-->


<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
@endsection
