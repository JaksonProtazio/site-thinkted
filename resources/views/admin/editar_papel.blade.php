@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
  <div class="starter-template text-left">
    <h1>Editar papel</h1>
    <form method="POST" action="{{ route('atualizar.papel',$papel->id) }}">
      @csrf
      <input type="hidden" name="_method" value="put">

      <div class="form-group">
        <label for="InputName">Nome</label>
        <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Nome do Papel" value="{{$papel->nome or ''}}">
        @if ($errors->has('name'))
          <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="InputEmail">Descrição</label>
        <input type="text" class="form-control" name="email" placeholder="Descrição" value="{{$papel->descricao or ''}}">
      </div>



      <button type="submit" class="btn btn-success">Salvar</button>
    </form>

    <br>

    @can('usuario-delete')

    <h1>Permissões</h1>

    <form method="POST" action="{{ route('adicionar.permissao',$papel->id) }}">
      @csrf
      <input type="hidden" name="_method" value="put">
      <div class="form-group">
        <label for="InputPassword">Permissões</label>
        <select class="form-control" name="permissao_id">
        @foreach ($permissoes as $permissao)
          <option value="{{$permissao->id}}">{{$permissao->nome}}</option>
        @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-success">Adicionar</button>

    </form>
    @endcan

    <br>
    <table class="table table-sm table-bordered">
      <thead>
        <tr>
        <!-- <th scope="col" >ID</th> -->
          <th scope="col" >Permissão</th>
          <th scope="col" >Descrição</th>
          <th scope="col" >Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($papel->permissoes as $permissao)
          <tr>
            <td>{{$permissao->nome}}</td>
            <td>{{$permissao->descricao}}</td>
            <td>
              @can('usuario-delete')
               <button type='submit' class='btn btn-sm btn-danger' data-toggle="modal" data-target="#confirm{{$permissao->id}}" data-product_id="{{ $permissao->id }}" data-product_name="{{ $permissao->name }}">Excluir</button>

               <div class="modal fade" id="confirm{{$permissao->id}}" role="dialog">
                 <div class="modal-dialog modal-md">
                   <div class="modal-content">
                     <div class="modal-body">
                       <p>Deseja excluir a permissao "{{$permissao->nome}}" do papel "{{$papel->nome}}"?</p>
                     </div>
                     <div class="modal-footer">
                       <a href="{{route('retirar.permissao.papel',[$papel->id,$permissao->id])}}"><button type="button" class="btn btn-danger" id="delete">Excluir</button></a>
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
