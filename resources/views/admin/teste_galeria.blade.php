@extends('layouts.admin.site')

@section('conteudo')

  @foreach($albuns as $album)
  <h1>Capa</h1>
    <img src="{{asset('adm/galeria/'.$album->titulo_album.'/capa/imagem_capa.'.$album->extensao)}}" alt="">

    <h3>Fotos</h3>
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
          echo "<img src='http://".$dominio.'/'.$filename. "' alt='teste'>";
        } else if (file_exists($filename2)){
          echo "<img src='http://".$dominio.'/'.$filename. "' alt='teste'>";
        }else if (file_exists($filename3)){
          echo "<img src='http://".$dominio.'/'.$filename. "' alt='teste'>";
        }
      ?>

    @endfor
  @endforeach

@endsection
