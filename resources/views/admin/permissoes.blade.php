@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
  <div class="starter-template text-left">

    <h1>Lista de Papéis</h1>
    <div class="text-right">
      <a href="#">
        <button type='button' class='mb-2 btn btn-sm btn-success '>Cadastrar</button>
      </a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col" >ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($papeis as $papel)
            <tr>

              <td>{{$papel->id}}</td>
              <td>{{$papel->nome}}</td>
              <td>{{$papel->descricao}}</td>
              <th>
                  @can('usuario-edit')
                  <a href="{{route('editar.papel',$papel->id)}}">
                    <button type='button' class='btn btn-sm btn-warning'>Editar</button>
                  </a>
                  @endcan

                  @can('usuario-delete')
                    <button type='submit' class='btn btn-sm btn-danger' data-toggle="modal" data-target="#confirm">Apagar</button>

                    <div class="modal fade" id="confirm" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-body">
                            <p>Deseja apagar o papel "{{$papel->nome}}"?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="#"><button type="button" class="btn btn-danger" id="delete">Apagar</button></a>
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
  </div>

</main><!-- /.container -->

@endsection
