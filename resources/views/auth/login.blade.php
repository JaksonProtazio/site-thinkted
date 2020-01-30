@extends('layouts.index-login')

@section('conteudo')
<div class="container text-center">
  <form class="form-signin" method="POST" action="{{ url('/login') }}">
    @csrf
    <img class="mb-4 text-center" src="img/logo_labted.png" alt="Logo LabTEd" width="auto" height="72">
    <h1 class="h3 mb-3 font-weight-normal">ThinkTEd Admin</h1>
    <label for="inputEmail" class="sr-only">Usuario</label>
    <input type="text" name="email" class="form-control mb-3" placeholder="Digite o usuário" required autofocus>
    @if ($errors->has('email'))
        <span>
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="password" class="form-control" placeholder="Digite a senha" required>
    @if ($errors->has('password'))
        <span>
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif

    <button class="mt-3 btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <div class="mt-3 text-center alert-danger" >
    </div>
    <p class="mt- text-muted">&copy; ThinkTEd - Pesquisa e Desenvolvimento em Tecnologias Educacionais </p>
  </form>
</div>
@endsection
