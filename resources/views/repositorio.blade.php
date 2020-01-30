@extends('layout.site')

@section('titulo','Laboratório de Tecnologias Educacionais - LabTEd')

@section('conteudo')
<div id="geral" class="green">
	<div id="sectionRep" class="container padding-top">
		<h2 align="center" class="titulos repositorio">Repositório</h2>
		<div class="TabControl">
				<div id="header" class="row">
						<ul class="abas row">
								<li class="col-md-6 col-sm-6 col-xs-3">
										<div class="aba" id="softwares">
												<span>Softwares</span>
										</div>
								</li>
								<li class="col-md-4 col-sm-4 col-xs-3">
										<div class="aba"  id="jogos">
												<span>Jogos</span>
										</div>
								</li>
						</ul>
				</div>
				<div id="content" class="row">
						<div class="conteudo col-lg-12 col-sm-12">
								<div class="row" align="center">
							<div class="col-lg-4 col-md-4 software">
								<!--
							<a class="svgLink" href="#" target="_blank">

								<div class="fundoImagemRepPag software">
									<div class="imagemRepPag software"></div>
									<div class="label-repositorioPag software">Unity</div>
								</div>


							</a>-->
							</div><!-- /.col-lg-4 -->
					</div>
					</div>

						<div class="conteudo col-lg-12 col-sm-12">
								<div class="row jogo" align="center">
							<div class="col-lg-4 col-md-4 jogo">
							<a class="svgLink" href="https://play.google.com/store/apps/details?id=com.AViagem" target="_blank">

								<div class="fundoImagemRepPag jogo">
									<div class="imagemRepPag jogo"><img src="{{asset('img/repositorio/jogos/a-viagem.png')}}" class="rounded-circle imagemTestePag"></div>
									<div class="label-repositorioPag jogo">A Viagem</div>
								</div>


							</a>
							</div><!-- /.col-lg-4 -->
					</div>
					</div>
				</div>
		</div>
	</div>
</div>

@endsection
