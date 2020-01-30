
@extends('layouts.index-login')

@section('conteudo')
<div class="container text-center">
    @csrf
    <img class="mb-4 text-center" src="{{asset('img/logo_labted.png')}}" alt="Logo LabTEd" width="auto" height="72">
    <div class=" text-center" >
      <h2>Desculpe! Página não encontrada.</h2>
    </div>
    <p class="mt-3 text-muted">&copy; LabTEd - Laboratório de Tecnologias Educacionais </p>
</div>
@endsection
