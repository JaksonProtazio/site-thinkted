@extends('layout.site')

@section('titulo','Laboratório de Tecnologias Educacionais - LabTEd')

@section('conteudo')
	<header>
		<div id="geralHeader">
			<div id="cabecalho-des-serious-games" class="jumbotron">
				<h2 id="tit-cab-lin-pesq">Desenvolvimento <br> de Games</h2>
			</div>
		</div>
	</header>
	<section id="sobreSerious" class="secaoLinhaDePesquisa">
		<div class="container">
			<h2 class="tituloLinhaDePesquisa">Sobre a Linha de Pesquisa</h2>
			<p class="textSobre text-justify anime" data-anime="left">Essa linha de pesquisa desenvolve jogos para smartphones, tablets e computadores. São desenvolvidos games com foco educacional e de entretenimento. Alguns jogos abordam temáticas das disciplinas escolares, como português, matemática, geografia, etc. Outros atendem para o desenvolvimento do pensamento computacional. Todos ancorados na perspectiva no processamento da informação afim de promover aprendizagem.</p>

		</div>
	</section>

	<section id="projetosSerious" class="secaoLinhaDePesquisa cor">
		<h2 class="tituloLinhaDePesquisa">Projetos</h2>
		<div id="geralProjetos" class="row">
			<div class="col-lg-4 col-md-4 innerProjetos anime" data-anime="top">
				<div class="clicar">
					<div id="projeto2SeriousGames" class="logoProjeto">
					</div>
					<div class="nomeProjeto">
						<h3>A Viagem</h3>
					</div>

					<div id="txtProjeto2" class="collapse text-justify textoProjeto">
						<p>O jogo educacional A Viagem tem como principal objetivo auxiliar as pessoas na aprendizagem do mapa político do Brasil. É um jogo de aventura de classificação everyone , segundo a classificação ESRB, com público alvo crianças com idade superior a 11 anos, no qual, de acordo com o Ministério da Educação (MEC), é a idade ideal para as pessoas estarem iniciando o sétimo ano do ensino fundamental, nível
da educação básica brasileira onde se iniciam os conteúdos de cartografia. Os conteúdos de geografia que podem ser considerados aludidos no jogo são de localização geográfica, divisão política brasileira, símbolos e bandeiras nacionais referenciadas às localidades, orientação espacial, leitura e interpretação de mapas e características específicas de cada estado/capital. Fornece ao jogador um guia que permite ao usuário que esteja interessado conhecer tais dados mesmo sem o auxílio de um especialista na área, com a facilidade de acesso característico de aplicativos e jogos de plataforma mobile . O jogador se põe como um dos protagonistas da história em uma exploração e em busca de resolver desafios. <a href="https://play.google.com/store/apps/details?id=com.AViagem" target="_blank" class="linkProjetos">Clique aqui para baixar.</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection
