@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
    <div class="starter-template text-left">

        <h1>Lista de Usuários</h1>
        <div class="text-right">
          <a href="{{route('cadastrar.usuario')}}">
        <button type='button' class='mb-2 btn btn-sm btn-success '>Cadastrar</button>
      </a>
    </div>
    <table class="table table-sm table-bordered">
      <thead>
        <tr>
        <!-- <th scope="col" >ID</th> -->
          <th scope="col" >Nome</th>
          <th scope="col" >Login</th>
          <th scope="col">Papel</th>
          <th scope="col" >Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $usuario)
          <tr>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>@foreach($usuario->papeis as $papel)
                  {{$papel->nome}}
                @endforeach
            </td>
            <td>
              @can('usuario-edit')
               <a href="{{route('editar.usuario',$usuario->id)}}">
                 <button type='button' class='btn btn-sm btn-warning'>Editar</button>
               </a>
              @endcan

              @can('usuario-delete')
               <button type='submit' class='btn btn-sm btn-danger' data-toggle="modal" data-target="#confirm{{$usuario->id}}" data-product_id="{{ $usuario->id }}" data-product_name="{{ $usuario->name }}">Apagar</button>

               <div class="modal fade" id="confirm{{$usuario->id}}" role="dialog">
                 <div class="modal-dialog modal-md">
                   <div class="modal-content">
                     <div class="modal-body">
                       <p>Deseja excluir o usuário "{{$usuario->name}}"?</p>
                     </div>
                     <div class="modal-footer">
                       <a href="{{route('excluir.usuario',$usuario->id)}}"><button type="button" class="btn btn-danger" id="delete">Apagar</button></a>
                       <button type="button" data-dismiss="modal" class="btn btn-default" name="button">Cancelar</button>
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
