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
      return view('quem_somos');
    }

    public function galeria()
    {
        $albuns = Album::all();
        return view('galeria',compact('albuns'));
    }

    public function verAlbum($id)
    {
      $album = Album::find($id);
      return view('album',compact('album'));
    }

    public function publicacoes()
    {
      $publicacoes = Publicacao::all();
      return view('publicacoes',compact('publicacoes'));
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
      //$reverse = $noticias->reverse();
      //return view('noticias',compact('reverse'));
      return view('noticias', ['reverse' => $reverse],compact('cont','max_noticias'));
    }

    public function verNoticia($id)
    {
      $noticia = Noticia::find($id);
      return view('noticia',compact('noticia'));
    }

    public function repositorio()
    {
      return view('repositorio');
    }

    public function desenvolvimentoGames()
    {
      return view('des_games');
    }

    public function pesquisaInovacao()
    {
      return view('pesquisa_inovacao');
    }

    public function desenvolvimentoWeb()
    {
      return view('des_web');
    }

    public function desenvolvimentoODT()
    {
      return view('des_objetos_digitais_tangiveis');
    }

    public function materialPovosTradicionais()
    {
      return view('material_povos_tradicionais');
    }

    public function pensamentoComputacional()
    {
      return view('pensamento_computacional');
    }

    public function parceiros()
    {
        return view('parceiros');
    }

    public function contato()
    {
      return view('contato');
    }
}
