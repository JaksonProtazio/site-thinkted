@extends('layout.site')

@section('titulo','Laboratório de Tecnologias Educacionais - LabTEd')

@section('conteudo')
<div id="geral" align="center">

<!--Inicio - Quem Somos -->
<div id="sobre">
	<div class="cabecalho">
		<div class="filtro-quem-somos">
			<div class="texto-cabecalho">
				<div><h2 class="titulos">O ThinkTEd</h2></div>
				<h3 class="subtitulos">Laboratório de Pesquisa e Desenvolvimento em Tecnologias Educacionais</h3>
			</div>
		</div>
	</div>
	<div class="row container padding-top">
			<!--coluna Titulos e Descrição LabTED -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="text-justify recuo resumo-sobre">	O ThinkTEd - Laboratório de Pesquisa e Desenvolvimento em Tecnologias Educacionais - Voltado para o estudo e desenvolvimento de Objetos e Processos de Aprendizagem.</p>
				<p class="text-justify recuo resumo-sobre">Trabalhamos para o desenvolvimento de materiais e métodos voltado para o processo de aprendizagem. Com isso nosso objetivo é promover uma aprendizagem efetiva e significava em forma de entretenimento.  Nossos Matérias são desenvolvidos sobre os aspectos da Gamificação e voltados para todos os públicos. Desenvolvemos e retrabalhamos métodos, para a produção cientifica, processos ágeis, e técnicas voltado para a aprendizagem de informática/computação, para isso usamos da computação desplugada.</p>
				<p class="text-justify recuo resumo-sobre">O ThinkTEd atua em algumas linhas de pesquisas tais como, Pensamento Computacional, Desenvolvimento de Jogos, Desenvolvimento Web, Criação de Objetos Tangíveis e uma linha especial de parceria com o Laboratório Dabukuri (UFAM) voltado para a Produção de Materiais Midiáticos para Povos Tradicionais.</p>
				<p class="text-justify recuo resumo-sobre">O laboratório é composto por uma equipe multidisciplinar e sua maioria alunos da Universidade do Estado do Amazonas do Núcleo de Computação abrangendo os Cursos de Licenciatura em Computação, Engenharia da Computação e Sistema da Informação, além de outros.</p>
				<p class="text-justify recuo resumo-sobre">O ThinkTEd localiza-se nas dependências do GRAEST - Grupo de Robótica e Automação da UEA/EST.
</p>
			</div>
	</div>
</div>
<!-- Fim Quem Somos -->

<!-- Equipe -->

<div id="equipeQuemSomos" class="padding-top">
	<div class="container">
		<h2 class="titulos">Equipe</h2>
		<h3 class="subtitulos"> Conheça a nossa equipe </h3>

		<div class="row ">

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/4559258194990884" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil3.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Douglas Silva</h2>
						</div>
					</a>
				</div><!-- /.col-lg-4 -->
				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/7241936793703207" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil4.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Fábio Michel</h2>
						</div>
					</a>
				</div><!-- /.col-lg-4 -->
				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/9416424164006171" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil5.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Fabrizio Honda</h2>
						</div>
					</a>
				</div><!-- /.col-lg-4 -->
				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href=" http://lattes.cnpq.br/1513105922120587" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil6.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Fernanda Gabriela</h2>
						</div>
					</a>
				</div><!-- /.col-lg-4 -->

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/2812577775517794" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil7.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Jakson Protázio</h2>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/1604969301222511" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil8.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Jean dos Santos</h2>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/6790958027134209" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil9.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">João Queroga</h2>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/9108765843823554" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil10.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">João Bernardo</h2>
						</div>
					</a>
				</div>



				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/4586674897442019" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil11.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Karolayne Batista</h2>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/9754061766044001" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil12.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Lucas Sarmento</h2>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/2546953243319525" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil13.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Luiz Fábio</h2>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil15.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Marcos Guibson</h2>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/4200022099802125" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil18.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Rafaela Melo</h2>
						</div>
					</a>
				</div>
			</div>
	</div>

	<!-- /.row -->
	</div>
</div>
@endsection
