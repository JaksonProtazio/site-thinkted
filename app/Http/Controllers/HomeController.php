<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Publicacao;
use App\Noticia;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $noticias = Noticia::all();
      $reverse = $noticias->reverse();

      return view('index',compact('reverse'));
    }

    public function quemSomos()
    {
      return redirect()->route('sobre');
    }

    public function verQuemSomos()
    {
      //variável para ativar a class css active no menu
      $quemSomos = 'active';
      return view('quem_somos',compact('quemSomos'));
    }

    public function galeria()
    {
        $albuns = Album::all();
        //variável para ativar a class css active no menu
        $galeria = 'active';
        return view('galeria',compact('albuns','galeria'));
    }

    public function verAlbum($id)
    {
      $album = Album::find($id);
      //variável para ativar a class css active no menu
      $galeria = 'active';
      return view('album',compact('album','galeria'));
    }

    public function publicacoes()
    {
      $publicacoes = Publicacao::all();
      //variável para ativar a class css active no menu
      $public = 'active';

      return view('publicacoes',compact('publicacoes','public'));
    }

    public function noticias()
    {
      $max_noticias = 5;
      $noticias = Noticia::all();
      $cont = 0;
      foreach ($noticias as $noticia) {
        if ($noticia->arquivado!="sim" && $noticia->tipo!="banner") {
          $cont++;
        }
      }
      $reverse = Noticia::orderBy('created_at', 'desc')->paginate($max_noticias+1);

      //variável para ativar a class css active no menu
      $noticia = 'active';
      return view('noticias', ['reverse' => $reverse],compact('cont','max_noticias','noticia'));
    }

    public function verNoticia($id)
    {
      $noticia = Noticia::find($id);
      return view('noticia',compact('noticia'));
    }

    public function repositorio()
    {
      //variável para ativar a class css active no menu
      $repositorio = 'active';
      return view('repositorio',compact('repositorio'));
    }

    public function desenvolvimentoGames()
    {
      //variável para ativar a class css active no menu
      $linha_pesquisa = 'active';
      return view('des_games',compact('linha_pesquisa'));
    }

    public function pesquisaInovacao()
    {
      //variável para ativar a class css active no menu
      $linha_pesquisa = 'active';
      return view('pesquisa_inovacao',compact('linha_pesquisa'));
    }

    public function desenvolvimentoWeb()
    {
      //variável para ativar a class css active no menu
      $linha_pesquisa = 'active';
      return view('des_web',compact('linha_pesquisa'));
    }

    public function desenvolvimentoODT()
    {
      //variável para ativar a class css active no menu
      $linha_pesquisa = 'active';
      return view('des_objetos_digitais_tangiveis',compact('linha_pesquisa'));
    }

    public function materialPovosTradicionais()
    {
      //variável para ativar a class css active no menu
      $linha_pesquisa = 'active';
      return view('material_povos_tradicionais',compact('linha_pesquisa'));
    }

    public function pensamentoComputacional()
    {
      //variável para ativar a class css active no menu
      $linha_pesquisa = 'active';
      return view('pensamento_computacional',compact('linha_pesquisa'));
    }

    public function parceiros()
    {
      //variável para ativar a class css active no menu
      $parceiros = 'active';
        return view('parceiros',compact('parceiros'));
    }

    public function contato()
    {
      //variável para ativar a class css active no menu
      $contato = 'active';
      return view('contato',compact('contato'));
    }
}
