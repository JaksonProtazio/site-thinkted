@extends('layout.site')

@section('titulo','Álbum')

@section('conteudo')
<!--Inicio Galeria-->
<div class="container" >
	<nav class="caminho">
		<div id="caminho" class="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="{{route('galeria')}}">Álbuns</a></li>
		    <li class="breadcrumb-item active" aria-current="page">{{$album->titulo_album}}</li>
		  </ol>
		</div>
	</nav>

 <h2 class="text-center">{{$album->titulo_album}}</h2>
	<h3 class="subtitulos text-secondary"> {{$album->descricao_album}} </h3>

	<div class="album text-muted">

			<div class="row">
					<div class="gal">

						@for($i=1; $i<$album->quantidade+1; $i++)
				      <?php
				        //pega o domínio
				        $dominio= $_SERVER['HTTP_HOST'];

				        //cria variáveis com o diretório das imagens e as variações das extensões da imagem
				        $filename1 = 'adm/galeria/'.$album->titulo_album.'/fotos/imagem_'.$i.'.png';
				        $filename2 = 'adm/galeria/'.$album->titulo_album.'/fotos/imagem_'.$i.'.jpg';
				        $filename3 = 'adm/galeria/'.$album->titulo_album.'/fotos/imagem_'.$i.'.jpeg';

				        //vê se existe a imagem com a extensão e então imprime
				        if (file_exists($filename1)) {
				          echo "<a href='http://".$dominio.'/'.$filename1. "' data-lightbox='mygallery' data-title='Descrição da imagem...'><img src='http://".$dominio.'/'.$filename1. "' alt=''></a>";
				        } else if (file_exists($filename2)){
				          echo "<a href='http://".$dominio.'/'.$filename2. "' data-lightbox='mygallery' data-title='Descrição da imagem...'><img src='http://".$dominio.'/'.$filename2. "' alt=''></a>";
				        }else if (file_exists($filename3)){
				          echo "<a href='http://".$dominio.'/'.$filename3. "' data-lightbox='mygallery' data-title='Descrição da imagem...'><img src='http://".$dominio.'/'.$filename3. "' alt='' class='foto'></a>";
				        }
				      ?>

				    @endfor
				</div>




			</div><!--Fim row-->
	</div><!--fim album-->
</div> <!--Fim container-->
<!--Fim Galeria-->
</div>


<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
@endsection
