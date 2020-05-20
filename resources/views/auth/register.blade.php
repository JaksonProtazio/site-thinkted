@extends('layouts.admin.site')

@section('conteudo')
<main role="main" class="container">
  <div class="starter-template text-left">
    <h1>Cadastrar Usuário</h1>
    <form method="POST" action="{{ url('/register') }}">
      <div class="form-group">
        <label for="InputName">Nome</label>
        <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Nome Completo">
        @if ($errors->has('name'))
          <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="InputEmail">Email</label>
        <input type="text" class="form-control" name="email" placeholder="E-mail">
      </div>

      <div class="form-group">
        <label for="InputPassword">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Senha">
      </div>

      <div class="form-group">
          <label for="password-confirm" class="form-control">{{ __('Confirmar Senha') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
      </div>


      <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
  </div>

</main><!-- /.container -->

@endsection
