@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
  <div class="starter-template text-left">
    <h1>Cadastrar Usuário</h1>
    <form method="POST" action="{{ route('salvar.usuario') }}">
      @csrf

      <div class="form-group">
        <label for="InputName">Nome</label>
        <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Nome Completo" value="{{old('name')}}">
        @if ($errors->has('name'))
          <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="InputEmail">Email</label>
        <input type="text" class="form-control" name="email" placeholder="E-mail" value="{{old('email')}}">
        @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="InputPassword">Papel</label>
        <select class="form-control" name="papel_id">
        @foreach ($papeis as $papel)
          <option value="{{$papel->id}}">{{$papel->nome}}</option>
        @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="InputPassword">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Senha">
        @if ($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="InputPassword">Senha</label>
        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha">
        @if ($errors->has('password_confirmation'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>

      <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
  </div>

</main><!-- /.container -->

@endsection
