@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
  <div class="starter-template text-left">
    <h1>Editar Publicação</h1>
    <form method="POST" action="{{route('atualizar.publicacao',$publicacao->id)}}" enctype="multipart/form-data">
      <input type="hidden" name="_method" value="PUT">
      @csrf
      <div class="form-group">
        <label for="InputAno">Ano</label>
        <input type="text" class="form-control" name="ano" aria-describedby="ano" placeholder="Ano" value="{{$publicacao->ano or ''}}">
      </div>

      <div class="form-group">
        <label for="InputTitulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" placeholder="Titulo" value="{{$publicacao->titulo or ''}}">
      </div>

      <div class="form-group">
        <label for="InputAutor">Evento</label>
        <input type="text" class="form-control" name="evento" placeholder="Evento" value="{{$publicacao->autor or ''}}">
      </div>

      <div class="form-group">
          <label for="InputArquivo">Arquivo</label>
          <input type="file" class="form-control-file" name="dir_arquivo"/>
      </div>

      <button type="submit" class="btn btn-success">Salvar</button>
    </form>
  </div>

</main><!-- /.container -->
@endsection
