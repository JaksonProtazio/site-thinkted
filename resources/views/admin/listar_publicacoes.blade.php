@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
  <div class="starter-template text-left">

    <h1>Lista de Publicações</h1>
    <div class="text-right">
      <a href="{{route('cadastrar.publicacao')}}">
        <button type='button' class='mb-2 btn btn-sm btn-success '>Cadastrar</button>
      </a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titulo</th>
          <th scope="col">Autor</th>
          <th scope="col">Data de Criação</th>
          <th scope="col">Data de Modificação</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($publicacoes as $publicacao)
          <tr>
            <td>{{$publicacao->id}}</td>
            <td>{{$publicacao->titulo}}</td>
            <td>{{$publicacao->autor}}</td>
            <td>{{$publicacao->created_at}}</td>
            <td>{{$publicacao->update_at}}</td>
            <td>
              <a href='#'>
              <button type='button' class='btn btn-sm btn-primary'>Visualizar</button>
              </a>
              @can('publicacao-edit')
              <a href='#'>
                <button type='button' class='btn btn-sm btn-warning'>Editar</button>
              </a>
              <a href='#'>
                <button type='button' class='btn btn-sm btn-danger'>Apagar</button>
              </a>
              @endcan
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</main><!-- /.container -->
@endsection
