@extends('layout.site')

@section('titulo','Contato')

@section('conteudo')
<div id="geral" align="center">
	<br> <br>
	<div class="container" id="containerFormulario">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h3 > Visite nossas redes socias </h3>
					<a href="https://www.facebook.com/thinktedlab/"> <img class="img-responsive" src="{{asset('img/face.png')}}" width="40" height="40" alt="Facebook"></a>
					<a href="https://www.instagram.com/thinkted_lab/"><img class="img-responsive" src="{{asset('img/insta.png')}}" width="40" height="40" alt="Instagram"></a>
					<!--<a href=""><img class="img-responsive" src="img/insta.png" width="40" height="40" alt="Instagram"></a>-->
				<h3 class="espLocalizacao" >Localização</h3>
				<div id="mapaHub">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.0025801438642!2d-60.019315970863396!3d-3.0919115607064707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c1aa4e4b93371%3A0x2da5a0321d0d2cac!2sFraunhofer%20Enas%20South%20American%20Desk!5e0!3m2!1spt-BR!2sbr!4v1589619065738!5m2!1spt-BR!2sbr" width="450" height="220" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<br>
					<h5>Pesquisa e Desenvolvimento em Tecnologias Educacionais</h5>
					<h6 class="text-muted"> Dependências do GRAEST - Grupo de Robótica e Automação</h6>
					<h6 class="text-muted"> Av. Darcy Vargas, Parque Dez de Novembro, Manaus - AM</h6>
					<h6 class="text-muted"> Email: thinkted@uea.edu.br</h6>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h3>Fale Conosco</h3>
				<div id="formulario">
					<form name="formulario" action="{{route('enviar.mensagem')}}" method="post">
						@csrf

						<input class="form-control" type="text" name="nome" size="45" placeholder="Nome"></p>

						<input class="form-control" type="text" name="email" size="45" placeholder="Email"></p>

						<input class="form-control" type="text" name="assunto" size="45" placeholder="Assunto"></p>

						<textarea class="form-control" name="mensagem" rows="10" cols="60" wrap="virtual" placeholder="Mensagem"></textarea></p>
						<button type="submit" class="btn btn-primary" value="Enviar Email">Enviar Email</button>
						<button type="reset" class="btn btn-secondary" value="Limpar Formulário">Limpar Formulário</button>
					</form>
				</div>
			</div>
		</div><!--Fim Row-->
	</div><!--Fim container-->

</div>
</div>
@endsection
