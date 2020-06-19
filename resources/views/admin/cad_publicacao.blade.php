@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
  <div class="starter-template text-left">
    <h1>Cadastrar Publicações</h1>
    <form method="POST" action="{{route('salvar.publicacao')}}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="InputAno">Ano</label>
        <input type="text" class="form-control" name="ano" aria-describedby="ano" placeholder="Ano">
      </div>

      <div class="form-group">
        <label for="InputTitulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" placeholder="Titulo">
      </div>

      <div class="form-group">
        <label for="InputAutor">Evento</label>
        <input type="text" class="form-control" name="evento" placeholder="Evento">
      </div>

      <div class="form-group">
          <label for="InputArquivo">Arquivo</label>
          <input type="file" class="form-control-file" name="dir_arquivo" />
      </div>

      <button type="submit" class="btn btn-success">Salvar</button>
    </form>
  </div>

</main><!-- /.container -->
@endsection
