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
          <th scope="col">Evento</th>
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
            <td>{{$publicacao->evento}}</td>
            <td>{{$publicacao->created_at}}</td>
            <td>{{$publicacao->updated_at}}</td>
            <td>
              @can('publicacao-edit')
              <a href="{{route('editar.publicacao',$publicacao->id)}}">
                <button type='button' class='btn btn-sm btn-warning'>Editar</button>
              </a>
              <a href='#'>
                <button type='button' class='btn btn-sm btn-danger' data-toggle="modal" data-target="#{{$publicacao->id}}">Apagar</button>
              </a>

              <!-- Modal -->
              <div class="modal fade" id="{{$publicacao->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Excluir Publicação</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Você tem certeza que deseja excluir a publicação "{{$publicacao->titulo}}"?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                      <a href="{{route('apagar.publicacao',$publicacao->id)}}">
                        <button type="button" class="btn btn-danger">Excluir</button>
                      </a>                     
                    </div>
                  </div>
                </div>
              </div>
              @endcan
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</main><!-- /.container -->
@endsection
