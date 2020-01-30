@extends('layouts.admin.site')

@section('conteudo')

   <main role="main" class="container">
     <div class="starter-template text-left">
       <h1>Cadastrar Notícia</h1>
       <form method="POST" action="{{route('salvar.noticia')}}" enctype="multipart/form-data" >
         @csrf
         <div class="form-group">
           <label for="InputTitulo">Título</label>
           <input type="text" class="form-control" name="titulo" aria-describedby="name" placeholder="Titulo">
           @if($errors->has('titulo'))
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
           @endif
         </div>

         <div class="form-group">
           <label for="InputDescricaoCurta" class=" control-label">Descrição Curta</label>
             <textarea class="form-control" rows="2" name="descricao_curta" placeholder="Descrição curta da noticia"></textarea>
             @if($errors->has('descricao_curta'))
              <span class="text-danger">{{ $errors->first('descricao_curta') }}</span>
             @endif
         </div>

          <div class="form-group">
           <label for="InputDescricaoLonga" class="control-label">Descrição Longa</label>
             <textarea class="form-control ckeditor" rows="6" name="descricao_longa" placeholder="Descrição Longa da noticia"></textarea>
         </div>


         <div class="form-group">
             <label for="FormControlFileImage">Imagem</label>
             <input type="file" class="form-control-file" name="imagem"  />
             @if($errors->has('imagem'))
              <span class="text-danger">{{ $errors->first('imagem') }}</span>
             @endif
         </div>

         <div class="form-check">
           <input class="form-check-input" type="checkbox" name="tipo" id="defaultCheck1">
           <label class="form-check-label" for="defaultCheck1">
             É um Banner
           </label>
         </div>

         <div class="form-check">
           <input class="form-check-input" type="checkbox" name="tipo" id="defaultCheck1">
           <label class="form-check-label" for="defaultCheck1">
             Arquivado?
           </label>
         </div>

         <div class="btn-salvar">
           <button class="btn btn-primary"  type="submit" >Salvar</button>
         </div>


       </form>
     </div>



   </main><!-- /.container -->


@endsection
