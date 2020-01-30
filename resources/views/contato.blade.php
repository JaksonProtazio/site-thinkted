@extends('layout.site')

@section('titulo','Contato')

@section('conteudo')
<div id="geral" align="center">
	<br> <br>
	<div class="container" id="containerFormulario">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h3 > Visite nossas redes socias </h3>
					<a href=""> <img class="img-responsive" src="img/face.png" width="40" height="40" alt="Facebook"></a>
					<a href=""><img class="img-responsive" src="img/g+.png" width="45" height="40" alt="Gmail"></a>
					<!--<a href=""><img class="img-responsive" src="img/insta.png" width="40" height="40" alt="Instagram"></a>-->
				<h3 class="espLocalizacao" >Localização</h3>
				<div id="mapaHub">
					<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6370.066296749733!2d-60.01960120423906!3d-3.0892198255690615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x926c1aa452bceae3%3A0x23715ad347502792!2sHub+Tecnologia+e+Inova%C3%A7%C3%A3o!3m2!1d-3.0920764999999997!2d-60.016194199999994!5e0!3m2!1spt-BR!2sbr!4v1513824668833" width="450" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
					<br>
					<h5>Laboratório de Tecnologias Educacionais</h5>
					<h6 class="text-muted"> Prédio HUB da Escola Superior de Tecnologia - EST/UEA</h6>
					<h6 class="text-muted"> Av. Darcy Vargas, Parque Dez de Novembro, Manaus - AM</h6>
					<h6 class="text-muted"> Telefone: (92) 3236-6820 / Email: hub_labted@uea.edu.br</h6>
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
