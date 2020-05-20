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
				<h3 class="subtitulos">Pesquisa e Desenvolvimento em Tecnologias Educacionais</h3>
			</div>
		</div>
	</div>
	<div class="row container padding-top">
			<!--coluna Titulos e Descrição LabTED -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="text-justify recuo resumo-sobre">	O ThinkTEd é o Laboratório de Pesquisa e Desenvolvimento em Tecnologias Educacionais, um espaço de pesquisa multidisciplinar, criado com o objetivo de promover o desenvolvimento científico e tecnológico por meio da criação de soluções criativas para os processos que envolvam tecnologias e aprendizagem. Localiza-se na Universidade do Estado do Amazonas - Escola Superior Tecnologia, nas dependências do GRAEST - Grupo de Robótica e Automação.</p>
				
			</div>
	</div>
</div>
<!-- Fim Quem Somos -->

<!-- Equipe -->

<div id="equipeQuemSomos" class="padding-top cor">
	<div class="container">
		<h2 class="titulos equipe">Equipe</h2>
		<h3 class="subtitulos equipe"> Conheça a nossa equipe </h3>

		<div class="row ">
				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="#" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil2.jpeg')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Daniel Leal</h2>
						</div>
					</a>
				</div><!-- /.col-lg-4 -->

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="#" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil45.jpg')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Diego Lucena</h2>
						</div>
					</a>
				</div><!-- /.col-lg-4 -->

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
					<a href="http://lattes.cnpq.br/1513105922120587" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil6.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Fernanda Gabriela</h2>
						</div>
					</a>
				</div><!-- /.col-lg-4 -->

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="#" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil20.jpg')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Giovanna Melo</h2>
						</div>
					</a>
				</div><!-- /.col-lg-4 -->

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="http://lattes.cnpq.br/2812577775517794" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil7.jpg')}}" alt="Generic placeholder image" width="140" height="140">
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
					<a href="#" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil9.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Jeniffer Macena</h2>
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
					<a href="#" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil22.jpg')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Marcela Pessoa</h2>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="#" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil21.png')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Polianny Almeida</h2>
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

				<div class="col-12 col-sm-6 col-md-4 col-lg-4 espacoEquipe linkEquipe">
					<a href="#" target="_blank">
						<div>
							<img class="rounded-circle borda aumentar" src="{{asset('img/perfil_equipe/perfil19.jpg')}}" alt="Generic placeholder image" width="140" height="140">
							<h2 class="nome-perfil aumentar">Raquel Laís</h2>
						</div>
					</a>
				</div>
			</div>
	</div>

	<!-- /.row -->
	</div>
</div>
@endsection
