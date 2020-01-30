<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $usuarios1 = Permissao::firstOrCreate([
        'nome' =>'usuario-view',
        'descricao' =>'Acesso a lista de Usuários'
      ]);

      $usuarios2 = Permissao::firstOrCreate([
          'nome' =>'usuario-create',
          'descricao' =>'Adicionar Usuários'
      ]);

      $usuarios2 = Permissao::firstOrCreate([
          'nome' =>'usuario-edit',
          'descricao' =>'Editar Usuários'
      ]);

      $usuarios3 = Permissao::firstOrCreate([
          'nome' =>'usuario-delete',
          'descricao' =>'Deletar Usuários'
      ]);

      $noticias1 = Permissao::firstOrCreate([
        'nome'=>'noticia-view',
        'descricao'=>'Visualizar notícias'
      ]);

      $noticias2 = Permissao::firstOrCreate([
        'nome'=>'noticia-create',
        'descricao'=>'Criar notícias'
      ]);

      $noticias3 = Permissao::firstOrCreate([
        'nome'=>'noticia-edit',
        'descricao'=>'Editar notícias'
      ]);

      $noticias4 = Permissao::firstOrCreate([
        'nome'=>'noticia-delete',
        'descricao'=>'Deletar notícias'
      ]);

      $noticias5 = Permissao::firstOrCreate([
        'nome'=>'noticia-archive',
        'descricao'=>'Arquivar notícias'
      ]);

      $album1 = Permissao::firstOrCreate([
        'nome'=>'album-view',
        'descricao'=>'Visualizar álbuns'
      ]);

      $album2 = Permissao::firstOrCreate([
        'nome'=>'album-create',
        'descricao'=>'Criar álbuns'
      ]);

      $album3 = Permissao::firstOrCreate([
        'nome'=>'album-edit',
        'descricao'=>'Editar álbuns'
      ]);

      $album4 = Permissao::firstOrCreate([
        'nome'=>'album-delete',
        'descricao'=>'Deletar álbuns'
      ]);

      $repositorio1 = Permissao::firstOrCreate([
        'nome'=>'repositorio-view',
        'descricao' => 'Visualizar Repositório'
      ]);

      $repositorio2 = Permissao::firstOrCreate([
        'nome'=>'repositorio-create',
        'descricao' => 'Editar Repositório'
      ]);

      $repositorio3 = Permissao::firstOrCreate([
        'nome'=>'repositorio-edit',
        'descricao' => 'Editar Repositório'
      ]);

      $repositorio4 = Permissao::firstOrCreate([
        'nome'=>'repositorio-delete',
        'descricao' => 'Deletar Repositório'
      ]);

      $publicacao1 = Permissao::firstOrCreate([
        'nome'=>'publicacao-view',
        'descricao'=>'Visualizar publicacoes'
      ]);

      $publicacao2 = Permissao::firstOrCreate([
        'nome'=>'publicacao-add',
        'descricao'=>'Adicionar publicacoes'
      ]);

      $publicacao3 = Permissao::firstOrCreate([
        'nome'=>'publicacao-edit',
        'descricao'=>'Editar publicacoes'
      ]);

      $publicacao4 = Permissao::firstOrCreate([
        'nome'=>'publicacao-delete',
        'descricao'=>'Deletar publicacoes'
      ]);
    }
}
