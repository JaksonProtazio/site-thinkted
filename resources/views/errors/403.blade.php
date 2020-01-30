
@extends('layouts.index-login')

@section('conteudo')
<div class="container text-center">
    <img class="mb-4 text-center" src="{{asset('img/logo_labted.png')}}" alt="Logo LabTEd" width="auto" height="72">
    <div class="msg text-center">
      <h2 class="alert-danger">{{ $exception->getMessage() }}</h2>
    </div>
    <p class="mt-3 text-muted">&copy; LabTEd - Laboratório de Tecnologias Educacionais </p>
</div>
@endsection
