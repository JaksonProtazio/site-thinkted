<?php

use App\Noticia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $noticia = Noticia::all();
    $reverse = $noticia->reverse();
    return view('index',compact('reverse'));
});

//Auth::routes();


// Authentication Routes...
$this->get('/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/login', 'Auth\LoginController@login');
$this->post('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('/register', ['as'=>'register','uses'=>'Auth\RegisterController@register']);

// Password Reset Routes...
$this->get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('/password/reset', 'Auth\ResetPasswordController@reset');

//Rotas do site LabTEd
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/quem_somos',['as'=>'sobre','uses'=>'HomeController@quemSomos']);
Route::get('/quem-somos',['as'=>'quem.somos','uses'=>'HomeController@verQuemSomos']);
Route::get('/galeria',['as'=>'galeria','uses'=>'HomeController@galeria']);
Route::get('/album/{id}',['as'=>'album','uses'=>'HomeController@verAlbum']);
Route::get('/publicacoes',['as'=>'publicacoes','uses'=>'HomeController@publicacoes']);
Route::get('/noticias',['as'=>'noticias','uses'=>'HomeController@noticias']);
Route::get('/noticia/{id}',['as'=>'ver.noticia','uses'=>'HomeController@verNoticia']);
Route::get('/repositorio',['as'=>'repositorio','uses'=>'HomeController@repositorio']);
Route::get('/desenvolvimento-games',['as'=>'des.games','uses'=>'HomeController@desenvolvimentoGames']);
Route::get('/pesquisa-inovacao-tecnologica',['as'=>'pesquisa.inovacao','uses'=>'HomeController@pesquisaInovacao']);
Route::get('/desenvolvimento-web',['as'=>'desenvolvimento.web','uses'=>'HomeController@desenvolvimentoWeb']);
Route::get('/desenvolvimento-objetos-digitais-tangiveis',['as'=>'desenvolvimento.ODT','uses'=>'HomeController@desenvolvimentoODT']);
Route::get('/material-digital-povos-tradicionais',['as'=>'povos.tradicionais','uses'=>'HomeController@materialPovosTradicionais']);
Route::get('/pensamento-computacional',['as'=>'pensamento.computacional','uses'=>'HomeController@pensamentoComputacional']);
Route::get('/contato',['as'=>'contato','uses'=>'HomeController@contato']);
Route::get('/parceiros',['as'=>'parceiros','uses'=>'HomeController@parceiros']);
Route::post('/enviar',['as'=>'enviar.mensagem','uses'=>'ContatoController@enviaContato']);

//Rotas do site administrativo
Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
  Route::get('/',['as'=>'home.admin','uses'=>'Admin\AdminController@index']);
  Route::get('/sair',['as'=>'sair','uses'=>'Admin\AdminController@sair']);

  Route::get('/listar-usuarios',['as'=>'listar.usuarios','uses'=>'Admin\AdminController@listarUsuarios']);
  Route::get('/cadastrar-usuario',['as'=>'cadastrar.usuario','uses'=>'Admin\AdminController@cadastrarUsuario']);
  Route::post('/salvar-usuario',['as'=>'salvar.usuario','uses'=>'Admin\AdminController@salvarCadastroUsuario']);
  Route::get('/editar-usuario/{id}',['as'=>'editar.usuario','uses'=>'Admin\AdminController@editarUsuario']);
  Route::post('/atualizar-usuario/{id}',['as'=>'atualizar.usuario','uses'=>'Admin\AdminController@atualizarUsuario']);
  Route::get('/excluir-usuario/{id}',['as'=>'excluir.usuario','uses'=>'Admin\AdminController@apagarUsuario']);

  Route::get('/listar-noticias',['as'=>'listar.noticias','uses'=>'Admin\AdminController@listarNoticias']);
  Route::get('/cadastrar-noticia',['as'=>'cadastrar.noticia','uses'=>'Admin\AdminController@cadastrarNoticia']);
  Route::post('/salvar-noticia',['as'=>'salvar.noticia','uses'=>'Admin\AdminController@salvarNoticia']);
  Route::get('/editar-noticia/{id}',['as'=>'editar.noticia','uses'=>'Admin\AdminController@editarNoticia']);
  Route::put('/atualizar-noticia/{id}',['as'=>'atualizar.noticia','uses'=>'Admin\AdminController@atualizarNoticia']);
  Route::get('/deletar-noticia/{id}',['as'=>'deletar.noticia','uses'=>'Admin\AdminController@deletarNoticia']);

  Route::get('/listar-publicacoes',['as'=>'listar.publicacoes','uses'=>'Admin\AdminController@listarPublicacoes']);
  Route::get('/cadastrar-publicacao',['as'=>'cadastrar.publicacao','uses'=>'Admin\AdminController@cadastrarPublicacao']);
  Route::post('/salvar-publicacao',['as'=>'salvar.publicacao','uses'=>'Admin\AdminController@salvarPublicacao']);


  Route::get('/listar-albuns',['as'=>'listar.albuns','uses'=>'Admin\AdminController@listarAlbuns']);
  Route::get('/cadastrar-album',['as'=>'cadastrar.album','uses'=>'Admin\AdminController@cadastrarAlbum']);
  Route::post('/salvar-album',['as'=>'salvar.album','uses'=>'Admin\AdminController@salvarAlbum']);

  Route::get('/editar-papel/{id}',['as'=>'editar.papel','uses'=>'Admin\AdminController@editarPapel']);
  Route::post('/atualizar-papel/{id}',['as'=>'atualizar.papel','uses'=>'Admin\AdminController@atualizarPapel']);

  Route::get('/papeis',['as'=>'ver.papeis','uses'=>'Admin\AdminController@verPapeis']);
  Route::get('/papel/{id}',['as'=>'editar.papel','uses'=>'Admin\AdminController@editarPapel']);
  Route::put('/atualizar-papel/{id}',['as'=>'atualizar.papel','uses'=>'Admin\AdminController@atualizarPapel']);
  Route::put('/adicionar-permissao/{id}',['as'=>'adicionar.permissao','uses'=>'Admin\AdminController@adicionarPermissao']);
  Route::get('/retirar-permissao/{papel}/{permissao}',['as'=>'retirar.permissao.papel','uses'=>'Admin\AdminController@retirarPermissaoPapel']);


});
