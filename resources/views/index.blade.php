@extends('layout.index')

@section('titulo','Laboratório de Tecnologias Educacionais - LabTEd')

@section('conteudo')
<!-- Início Carrossel -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Início Imagens -->
				<div class="carousel-inner">
					<?php $i=0; ?>
					@foreach($reverse as $noticia)
						@if($i==4)
							@break
						@endif
						@if($loop->first)
							@if($noticia->tipo!='banner')
								<!--Primeiro Slide -->
								<div class="carousel-item active bgCarrossel">
									<a href="{{route('ver.noticia',$noticia->id)}}">
										<div class="imagemCarrossel">
											<img class='first-slide' src='{{$noticia->imagem}}' alt='' width='100%' >";
										</div>
											<div>
												<div class="carousel-caption d-md-block textoCarrossel">
													<div class="teste">
															<h2 class="tituloCarrossel">{{$noticia->titulo}}</h2>
															<p class="resumoTxtCarrossel">{{$noticia->descricao_curta}}</p>
														</div>
													</div>
											</div>

											<div class="filtro">
											</div>
										</a>
								</div>
							@else
								<!--Primeiro Slide -->
								<div class="carousel-item active bgCarrossel">
									<a href="https://docs.google.com/forms/d/e/1FAIpQLSdib0PUlePOQokPeHCEXL9W1pvbiR2fyPCKWstGqpNLsfA91w/viewform" target="_blank">
										<div class="imagemCarrossel">
											<img class='first-slide' src='{{$noticia->imagem}}' alt='' width='100%'>";

									</a>
								</div>
							@endif

						@else
							@if($noticia->tipo!='banner')
								<div class="carousel-item bgCarrossel">
									<a href="{{route('ver.noticia',$noticia->id)}}">
										<div class="imagemCarrossel">
											<img class='first-slide' src='{{$noticia->imagem}}' alt='' width='100%'>";
										</div>
											<div>
												<div class="carousel-caption d-md-block textoCarrossel">
													<div class="teste">
															<h2 class="tituloCarrossel">{{$noticia->titulo}}</h2>
															<p class="resumoTxtCarrossel">{{$noticia->descricao_curta}}</p>
														</div>
													</div>
											</div>

										<div class="filtro">
										</div>
										</a>
								</div>
							@else
								<div class="carousel-item bgCarrossel">
									<a href="{{route('ver.noticia',$noticia->id)}}">
										<div class="imagemCarrossel">
											<img class='first-slide' src='{{$noticia->imagem}}' alt='' width='100%'>";
										</div>
									</a>
								</div>
							@endif
						@endif
						<?php $i++; ?>
					@endforeach
				</div>

				<!-- Fim Imagens -->

				<!-- Início Controles esquerda e direita -->
				<a class="carousel-control-prev btnCarrossel btn-prev" href="#myCarousel" role="button" data-slide="prev">
		    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    		<span class="sr-only">Previous</span>
		  	</a>

				<a class="carousel-control-next btnCarrossel btn-next" href="#myCarousel" role="button" data-slide="next">
		    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    		<span class="sr-only">Next</span>
		  	</a>
				<!-- Fim Controles esquerda e direita -->

				<div id="link-descer">
					<a href="#quemSomos" class="scroll"><img src="{{asset('img/seta.png')}}" width="28px" class="medio"/></a>
				</div>
			</div>
		</div>
			<!-- Fim Carrossel -->


			<!-- INICIO CONTAINER -->
			<div id="geral" class="containerIndex">

			<!--Inicio - Quem Somos -->

				<div id="quemSomos" class="row scroll">
					<div class="escurecer container">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="innerQuemSomos">
							<div><h2 class="titulos">O ThinkTEd</h2></div>

							<h3 class="subtitulos anime" data-anime="left">Pesquisa e Desenvolvimento em Tecnologias Educacionais</h3>

							<a id="mostrarQuemSomos" class="btn anime" align="center" data-toggle="collapse" data-target="#esconderTexto" aria-controls="esconderTexto" aria-expanded="false"><i class="fas fa-bars"></i></a>

							<div id="esconderTexto" class="anime" data-anime="right">
						      	<p id="resumoQuemSomos" class="text-justify"> O ThinkTEd é o Laboratório de Pesquisa e Desenvolvimento em Tecnologias Educacionais, um espaço de pesquisa multidisciplinar, criado com o objetivo de promover o desenvolvimento científico e tecnológico por meio da criação de soluções criativas para os processos que envolvam tecnologias e aprendizagem. Localiza-se na Universidade do Estado do Amazonas - Escola Superior Tecnologia, nas dependências do GRAEST - Grupo de Robótica e Automação. </p>

						      	<a class="btn btn-primary" href="{{route('quem.somos')}}" role="button" id="saibaMais">Saiba mais...</a>
					      	</div>
						</div>
					</div>

				</div>
			<!-- Fim Quem Somos -->

			<!--Inicio - Projetos -->
						<section class="paddingIndexLP gallery scroll" id="linhas_de_pesquisa">
			        <div class="col-lg-12 text-center">
			          <h2 class="section-heading titulos colorLinha">Linhas de Pesquisas</h2>
			          <h3 class="subtitulos colorLinha">Confira as linhas de pesquisa do laboratório</h3>
			          <hr class="my-4">
			        </div>

							<div class="container-fluid">
								<div class="row content-center">
									<div class="col-lg-2 linha-de-pesquisa anime" data-anime="left">
										<a href="{{route('des.games')}}">
											<div class="logo-linha-de-pesquisa">
												<img src="{{asset('img/linhas_de_pesquisa/logos/desenvolvimento_games.png')}}" alt="">
											</div>

											<div class="label-linha-de-pesquisa">
												Desenvolvimento de Games
											</div>
										</a>
									</div>

									<div class="col-lg-2 linha-de-pesquisa anime" data-anime="left">
										<a href="{{route('pesquisa.inovacao')}}">
											<div class="logo-linha-de-pesquisa">
												<img src="{{asset('img/linhas_de_pesquisa/logos/pesquisa-e-inovacao-tecnologica.png')}}" alt="">
											</div>

											<div class="label-linha-de-pesquisa">
												Pesquisa e Inovação Tecnológica
											</div>
										</a>
									</div>

									<div class="col-lg-2 linha-de-pesquisa anime" data-anime="left">
										<a href="{{route('desenvolvimento.web')}}">
											<div class="logo-linha-de-pesquisa">
												<img src="{{asset('img/linhas_de_pesquisa/logos/desenvolvimento-web.png')}}" alt="">
											</div>

											<div class="label-linha-de-pesquisa">
											Cognição e Desenvolvimento Humano
											</div>
										</a>
									</div>

									<div class="col-lg-2 linha-de-pesquisa anime" data-anime="left">
										<a href="{{route('pensamento.computacional')}}">
											<div class="logo-linha-de-pesquisa">
												<img src="{{asset('img/linhas_de_pesquisa/logos/pensamento-computacional2.png')}}" alt="">
											</div>

											<div class="label-linha-de-pesquisa">
												Pensamento Computacional
											</div>
										</a>
									</div>

									<div class="col-lg-2 linha-de-pesquisa anime" data-anime="left">
										<a href="{{route('desenvolvimento.ODT')}}">
											<div class="logo-linha-de-pesquisa">
												<img src="{{asset('img/linhas_de_pesquisa/logos/objetos-digitais-tangiveis.png')}}" alt="">
											</div>

											<div class="label-linha-de-pesquisa">
												Desenvolvimento de Objetos Digitais Tangíveis
											</div>
										</a>
									</div>

									<div class="col-lg-2 linha-de-pesquisa anime" data-anime="left">
										<a href="{{route('povos.tradicionais')}}">
											<div class="logo-linha-de-pesquisa">
												<img src="{{asset('img/linhas_de_pesquisa/logos/povos-tradicionais4.png')}}" alt="">
											</div>

											<div class="label-linha-de-pesquisa">
												Tecnologias Educacionais para Povos Indígenas
											</div>
										</a>
									</div>

								</div>
							</div>

				    </section>
			<!-- Fim Projetos -->

			<!--REPOSITÓRIOS -->
				<div id="repositorio" class="scroll paddingIndex">
					<h2 class="titulos repositorio">Repositório </h2>
			 		<h3 class="subtitulos repositorio">Confira aqui o repositório do nosso laboratório.</h3>

					  <div class="row" align="center">
					    <div class="col-lg-6 centralizar anime" data-anime="left">
								<a class="svgLink click_softwares" href="{{route('repositorio')}}">

									<div class="fundoImagemRep">
										<div class="imagemRep"><img src="{{asset('img/repIndex/software.png')}}" class="imagemTeste"></div>
										<div class="label-repositorio">Softwares</div>
									</div>


								</a>

					    </div><!-- /.col-lg-4 -->
					    <div class="col-lg-6 centralizar anime" data-anime="right">
						    <a class="svgLink click_jogos" href="{{route('repositorio')}}" id="jogos">
									<div class="fundoImagemRep">
										<div class="imagemRep"><img src="{{asset('img/repIndex/jogos.png')}}" class="imagemTeste"></div>
										<div class="label-repositorio">Jogos</div>
									</div>
								</a>
							</div><!-- /.col-lg-4 -->
						</div>
				</div>
			<!-- Fim Repositórios -->

			</div>
			<!-- FIM CONTAINER -->

@endsection
