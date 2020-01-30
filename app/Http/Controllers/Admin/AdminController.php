<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Noticia;
use App\Publicacao;
use App\Album;
use App\Papel;
use App\Permissao;


class AdminController extends Controller
{
    public function index()
    {
      return view('admin.index');
    }

    public function sair()
    {
      Auth::logout();
      return redirect('/login');
    }

    public function listarUsuarios()
    {
      if(Gate::denies('usuario-view')){
        abort(403,"Acesso não autorizado!");
      }

      $usuarios = User::all();
      $papeis = Papel::all();
      return view('admin.listar_usuarios',compact('usuarios','papeis'));
    }

    public function cadastrarUsuario()
    {
      if(Gate::denies('usuario-create')){
        abort(403,"Acesso não autorizado!");
      }

      $papeis = Papel::all();

      return view('admin.cad_usuario',compact('papeis'));
    }

    public function salvarCadastroUsuario(Request $request)
    {
      if(Gate::denies('usuario-create')){
        abort(403,"Acesso não autorizado!");
      }

      //Valida os campos
      $dados = $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required|confirmed',
        'password_confirmation'=>'sometimes|required_with:password'
      ], [
          'name.required'=> "O campo Nome deve ser preenchido",
          'email.required'=> "O campo E-mail deve ser preenchido",
          'password.required'=> "Este campo é obrigatório",
          'password.confirmed'=>"As senhas não coincidem",
      ]);

      //Recebe os dados, criptografa a senha, adiciona papel ao usuário e salva no banco
      $dados = User::create($request->all());
      $id = $dados->id;
      $user = User::find($id);
      $senha = $user->password;
      $user->password = bcrypt($senha);
      $user->save();
      $dados = $request->all();
      $papel = Papel::find($dados['papel_id']);
      $user->adicionaPapel($papel);

      return redirect()->route('listar.usuarios');
    }

    public function editarUsuario($id)
    {
      if(Gate::denies('usuario-edit')){
        abort(403,"Acesso não autorizado!");
      }

      $usuario = User::find($id);
      $papeis = Papel::all();
      return view('admin.editar_usuario',compact('usuario','papeis'));
    }

    public function atualizarUsuario(Request $request, $id)
    {
      if(Gate::denies('usuario-edit')){
        abort(403,"Acesso não autorizado!");
      }

        $usuario = User::find($id);
        $dados = $request->all();
        $papel = Papel::find($dados['papel_id']);
        $usuario->adicionaPapel($papel);
        User::find($id)->update($dados);
        return redirect()->route('listar.usuarios');
    }

    public function apagarUsuario($id){
      if(Gate::denies('usuario-delete')){
        abort(403,"Acesso não autorizado!");
      }

      User::find($id)->delete();

      return redirect()->route('listar.usuarios');
    }

    public function listarNoticias()
    {
      if(Gate::denies('noticia-view')){
        abort(403,"Acesso não autorizado!");
      }

      $max_noticias = 5;
      $noticias = Noticia::orderBy('created_at', 'desc')->paginate($max_noticias+1);
      return view('admin.listar_noticias',compact('noticias'));
    }

    public function cadastrarNoticia()
    {
      if(Gate::denies('noticia-create')){
        abort(403,"Acesso não autorizado!");
      }

      return view('admin.cad_noticia');
    }

    public function salvarNoticia(Request $dados)
    {
      if(Gate::denies('noticia-create')){
        abort(403,"Acesso não autorizado!");
      }

      //Valida os campos
      $noticia = $dados->validate([
        'titulo'=>'required',
        'descricao_curta'=>'required',
        'imagem'=>'required',
      ], [
          'titulo.required'=> "Título é obrigatório",
          'descricao_curta.required'=> "Este campo é obrigatório",
          'imagem.required'=> "Upload de imagem obrigatório",
      ]);
      //recebe os dados via post
      $noticia = $dados->all();

        //verifica se tem o arquivo imagem e move para o diretório correto
        if ($dados->hasFile('imagem')) {
          $imagem = $dados->file('imagem');
          $nomePasta = $noticia['titulo'];
          $pasta = Noticia::tirarAcentos($nomePasta);
          $dir = "adm/noticias/img";
          $ex = $imagem->guessClientExtension();
          $nomeImagem = "imagem_".$pasta.".".$ex;
          $imagem->move($dir,$nomeImagem);
          $noticia['imagem'] = $dir."/".$nomeImagem;
        }

        if (isset($noticia['tipo'])) {
          $noticia['tipo'] = 'banner';
        }else {
          $noticia['tipo'] = 'noticia';
        }

        if (isset($noticia['arquivado'])) {
          $noticia['arquivado'] = 'sim';
        }else {
          $noticia['arquivado'] = 'não';
        }

      //salva dados no banco
      Noticia::create($noticia);
      return redirect()->route('listar.noticias');
    }

    public function editarNoticia($id)
    {
      if(Gate::denies('noticia-edit')){
        abort(403,"Acesso não autorizado!");
      }
      $noticia = Noticia::find($id);

      return view('admin.editar_noticia',compact('noticia'));
    }

    public function atualizarNoticia(Request $dados, $id)
    {
      if(Gate::denies('noticia-edit')){
        abort(403,"Não autorizado!");
      }

      //Valida os campos
      $noticia = $dados->validate([
        'titulo'=>'required',
        'descricao_curta'=>'required',
        'imagem'=>'required',
      ], [
          'titulo.required'=> "Título é obrigatório",
          'descricao_curta.required'=> "Este campo é obrigatório",
          'imagem.required'=> "Upload de imagem obrigatório",
      ]);
      //recebe os dados via post
      $noticia = $dados->all();

        //verifica se tem o arquivo imagem e move para o diretório correto
        if ($dados->hasFile('imagem')) {
          $imagem = $dados->file('imagem');
          $nomePasta = $noticia['titulo'];
          $pasta = Noticia::tirarAcentos($nomePasta);
          $dir = "adm/noticias/img";
          $ex = $imagem->guessClientExtension();
          $nomeImagem = "imagem_".$pasta.".".$ex;
          $imagem->move($dir,$nomeImagem);
          $noticia['imagem'] = $dir."/".$nomeImagem;
        }

        if (isset($noticia['tipo'])) {
          $noticia['tipo'] = 'banner';
        }else {
          $noticia['tipo'] = 'noticia';
        }

        if (isset($noticia['arquivado'])) {
          $noticia['arquivado'] = 'sim';
        }else {
          $noticia['arquivado'] = 'não';
        }

      //salva dados no banco
      Noticia::find($id)->update($noticia);
      return redirect()->route('listar.noticias');

    }

    public function deletarNoticia($id)
    {
      if(Gate::denies('noticia-delete')){
        abort(403,"Acesso não autorizado!");
      }

      $noticia = Noticia::find($id);
      $nome = $noticia['imagem'];
      Noticia::find($id)->delete();
      File::delete($nome);

      return redirect()->route('listar.noticias');
    }


    public function listarPublicacoes()
    {
      if(Gate::denies('publicacao-view')){
        abort(403,"Acesso não autorizado!");
      }

      $publicacoes = Publicacao::all();
      return view('admin.listar_publicacoes',compact('publicacoes'));
    }

    public function cadastrarPublicacao()
    {
      if(Gate::denies('publicacao-create')){
        abort(403,"Acesso não autorizado!");
      }

      return view('admin.cad_publicacao');
    }

    public function salvarPublicacao(Request $dados)
    {
      if(Gate::denies('publicacao-create')){
        abort(403,"Acesso não autorizado!");
      }

      //recebe os dados via post
      $publicacao = $dados->all();

      //verifica se tem o arquivo pdf e move para o diretório correto
      if($dados->hasFile('dir_arquivo')){
        $arquivo = $dados->file('dir_arquivo');
        $num = rand(1111,9999);
        $dir = "adm/publicacao/upload_pdf";
        $ex = $arquivo->guessClientExtension();
        $nomeArquivo = "arquivo_".$num.".".$ex;
        $arquivo->move($dir,$nomeArquivo);
        $publicacao['dir_arquivo'] = $dir."/".$nomeArquivo;
      }

      //salva no banco
      Publicacao::create($publicacao);
      return redirect()->route('listar.publicacoes');
    }

    public function listarAlbuns()
    {
      if(Gate::denies('album-view')){
        abort(403,"Acesso não autorizado!");
      }

      $albuns = Album::all();
      return view('admin.listar_albuns',compact('albuns'));
    }

    public function cadastrarAlbum()
    {
      if(Gate::denies('album-create')){
        abort(403,"Acesso não autorizado!");
      }

      return view('admin.cad_album');
    }

    public function salvarAlbum(Request $dados)
    {
      if(Gate::denies('album-create')){
        abort(403,"Acesso não autorizado!");
      }

      //recebe dados
      $album = $dados->all();

      //pega os arquivos
      $fotos = $dados->file('fotos');
      $capa = $dados->file('capa');

      //move a capa para a pasta correta
      $nome_dir_capa = $album['titulo_album'];
      $dir = "adm/galeria/".$nome_dir_capa."/capa";
      $ex = $capa->guessClientExtension();
      $nomeCapa = "imagem_capa".".".$ex;
      $capa->move($dir,$nomeCapa);
      $album['capa'] = $dir."/".$nomeCapa;
      $album['extensao'] = $ex;

      //verifica se as fotos do album foram colocadas no input
      if(!empty($fotos)){
        $num = 1;
        //move as fotos para a pasta correta
        foreach ($fotos as $foto) {
          $nome_dir = $album['titulo_album'];
          $ex = $foto->guessClientExtension();
          $dir = "adm/galeria/".$nome_dir."/fotos";
          $nomeFoto = "imagem_".$num.".".$ex;
          $foto->move($dir,$nomeFoto);
          $num++;
        }
      }
      $album['fotos'] = $dir."/";
      $album['quantidade'] = $num-1;

      //salva no banco
      Album::create($album);
      return redirect()->route('listar.albuns');
    }

    public function verPapeis()
    {
      if(Gate::denies('usuario-edit')){
        abort(403,"Acesso não autorizado");
      }

      $papeis = Papel::all();

      return view('admin.permissoes',compact('papeis'));
    }

    public function editarPapel($id)
    {
      if(Gate::denies('usuario-edit')){
        abort(403,"Acesso não autorizado");
      }

      $papel = Papel::find($id);
      $permissoes = Permissao::all();

      return view('admin.editar_papel',compact('papel','permissoes'));
    }

    public function atualizarPapel(Request $request, $id){
      if(Gate::denies('usuario-edit')){
        abort(403,"Acesso não autorizado");
      }

      $papel = Papel::find($id);
      $dados = $request->all();
      Papel::find($id)->update($dados);

      return redirect()->route('ver.papeis');
    }

    public function adicionarPermissao(Request $request, $id){
      if(Gate::denies('usuario-edit')){
        abort(403,"Acesso não autorizado");
      }

      $papel = Papel::find($id);
      $dados = $request->all();
      $permissao = Permissao::find($dados['permissao_id']);
      $papel->adicionaPermissao($permissao);
      return redirect()->back();
    }

    public function retirarPermissaoPapel($id,$permissao_id){
      if(Gate::denies('usuario-edit')){
        abort(403,"Acesso não autorizado");
      }

      $papel = Papel::find($id);
      $permissao = Permissao::find($permissao_id);
      $papel->removePermissao($permissao);

      return redirect()->back();
    }

}
