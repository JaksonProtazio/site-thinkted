@extends('layouts.admin.site')

@section('conteudo')

<main role="main" class="container">
  <div class="starter-template text-left">

    <h1>Lista de Noticias</h1>
    <div class="text-right">
      <a href="{{route('cadastrar.noticia')}}">
    <button type='button' class='mb-2 btn btn-sm btn-success '>Cadastrar</button>
  </a>
</div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col" >ID</th>
          <th scope="col">Titulo</th>
          <th scope="col">Data de Criação</th>
          <th scope="col">Data de Modificação</th>
          <th scope="col">Arquivado</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($noticias as $noticia)
            <tr>

              <td>{{$noticia->id}}</td>
              <td>{{$noticia->titulo}}</td>
              <td>{{$noticia->created_at}}</td>
              <td>{{$noticia->update_at}}</td>
              <td>{{$noticia->arquivado}}</td>
              <th><a href='#'>
                    <button type='button' class='btn btn-sm btn-primary'>Visualizar</button>
                  </a>
                  @can('noticia-edit')
                    <a href="{{route('editar.noticia',$noticia->id)}}">
                      <button type='button' class='btn btn-sm btn-warning'>Editar</button>
                    </a>


                      <button type='submit' class='btn btn-sm btn-danger' data-toggle="modal" data-target="#confirm">Apagar</button>

                      <div class="modal fade" id="confirm" role="dialog">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-body">
                              <p>Deseja apagar a notícia "{{$noticia->titulo}}"?</p>
                            </div>
                            <div class="modal-footer">
                              <a href="{{route('deletar.noticia',$noticia->id)}}"><button type="button" class="btn btn-danger" id="delete">Apagar</button></a>
                              <button type="button" data-dismiss="modal" class="btn btn-default" name="button">Cancelar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  @endcan
              </th>

            </tr>
        @endforeach
      </tbody>
    </table>

    <div class="paginacao">
  		{{$noticias->links('.admin.paginacao')}}
  	</div>
  </div>

</main><!-- /.container -->

@endsection
