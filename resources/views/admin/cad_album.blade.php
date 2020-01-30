@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
  <div class="starter-template text-left">
    <h1>Cadastrar Album</h1>
    <form name="upload" method="POST" action="{{route('salvar.album')}}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="Inputtitulo">Titulo</label>
        <input type="text" class="form-control" name="titulo_album" aria-describedby="name" placeholder="Titulo">
      </div>

      <div class="form-group">
        <label for="inputDescricao" class="control-label">Descrição </label>
          <textarea class="form-control" rows="6" name="descricao_album" placeholder="Descrição"></textarea>
      </div>

       <div class="form-group">
          <label for="InputCapa">Capa do Album</label>
          <input type="file" class="form-control-file" name="capa" />
      </div>

        <div class="form-group">
          <label for="InputFotos">Inserir Fotos</label>
          <input type="file" class="form-control-file" name="fotos[]" multiple="multiple" />
        </div>


      <button type="submit" class="btn btn-success">Salvar</button>
    </form>
  </div>

</main><!-- /.container -->

@endsection
