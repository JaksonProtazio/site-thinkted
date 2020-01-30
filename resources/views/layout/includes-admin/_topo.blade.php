<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="{{asset('/logo.ico')}}">
    <title>Site administrativo</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilo.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{route('home.admin')}}">LabTEd</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="{{route('listar.usuarios')}}">Listar Usuários</a>
                  <a class="dropdown-item" href="{{route('cadastrar.usuario')}}">Cadastrar Usuários</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Noticias</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="{{route('listar.noticias')}}">Listar Notícias</a>
                  <a class="dropdown-item" href="{{route('cadastrar.noticia')}}">Inserir Notícias</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Publicações</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="{{route('listar.publicacoes')}}">Listar Publicações</a>
                  <a class="dropdown-item" href="{{route('cadastrar.publicacao')}}">Inserir Publicações</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeria</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="{{route('listar.albuns')}}">Listar Álbum</a>
                  <a class="dropdown-item" href="{{route('cadastrar.album')}}">Inserir Álbum</a>
                </div>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inscrições</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="administrativo.php?link=21">Processos Seletivos</a>
                  <a class="dropdown-item" href="#">Cursos</a>
                </div>
              </li>
              @can('usuario-edit')
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{route('ver.papeis')}}">Permissões</a>
                </li>
              @endcan

              <li class="nav-item active">
                <a class="nav-link" href="{{route('sair')}}">Sair <span class="sr-only">(current)</span></a>
              </li>
            </ul>

          </div>
          </div>
        </nav>
