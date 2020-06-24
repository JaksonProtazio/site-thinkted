@extends('layout.site')

@section('titulo','Laboratório de Tecnologias Educacionais - LabTEd')

@section('conteudo')
<div id="geral">

	<header>
		<div id="geralHeader">
			<div id="cabecalho-des-Web" class="jumbotron">
				<h2 id="tit-cab-lin-pesq">Cognição e <br> Desenvolvimento Humano</h2>
			</div>
		</div>
	</header>
	<section id="sobreWeb" class="secaoLinhaDePesquisa cor">
		<h2 class="tituloLinhaDePesquisa">Sobre</h2>
		<p class="textSobre text-justify">Essa linha de pesquisa compreende aspectos para construção de sites ou aplicações web é destinado ao desenvolvimento de softwares, app, sistemas, sites e dentre outros. Para tal utiliza-se de ferramentas como XML, HTML, CSS, JavaScript, Java, entre outras para estruturação de uma página, aplicativo ou sistema web. Através desses recursos é possível desenvolver e organizar aplicações para internet e intranet visando melhorias ao usuário da rede mundial e local.</p>
	</section>

	<section id="projetosWeb" class="secaoLinhaDePesquisa">
		<h2 class="tituloLinhaDePesquisa">Projetos</h2>
		<div id="geralProjetos" class="row">

		</div>
	</section>

@endsection
