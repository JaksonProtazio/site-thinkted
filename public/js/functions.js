$(document).ready(function(){
	var hMonitor = $(window).height();

	$(".carousel-item").css("height",hMonitor/10*8.8);


	$(".click_softwares").click(function(){
	   sessionStorage.setItem("ind", 1);
	   sessionStorage.setItem("id", "softwares");
	});
	$(".click_jogos").click(function(){
	   sessionStorage.setItem("ind", 2);
	   sessionStorage.setItem("id", "jogos");
	});


	/* Pega a largura da tela */
	var width = screen.width;

	/* Obtém a largura do body */
	var largBody = $('body').innerWidth();


	/*Condição que define se irá esconder a seção O LabTEd */
	if(width <=760){
		$('#esconderTexto').addClass('collapse');
	}else{
		$('#esconderTexto').removeClass('collapse');
	}

	/* Condição que define se irá remover a class 'left-float' das imagens do Rodapé e assim centralizá-las na div */
	if (width <= 990) {
		$('.logoFooter').removeClass('float-left');
	}else{
		$('.logoFooter').addClass('float-left');
	}

	/* Função para verificar o clique nos projetos nas páginas de linhas de pesquisa e assim esconder ou não o texto-resumo do projeto */
	$target = $('.clicar');
	var number = 1;
	$target.each(function(){
		$(this).attr('id',number);
		number++;
	});

	$target2 = $('.textoProjeto');
	var num = 1;
	$target2.each(function(){
		$(this).attr('id','txtProjeto'+num);
		num++;
	});

	$('.clicar div').click(function(){
		id = $(this).parent().attr('id');

		$('#txtProjeto'+id).toggleClass('collapse');;
	});


	/* Executa as linhas anteriores quando o tamanho da janela do browser é alterado com excessão da função clique */
	$(window).resize(function(){
		var hMonitor = $(window).height();

		width = screen.width;

		if(width <=760){
			$('#esconderTexto').addClass('collapse');
		}else{
			$('#esconderTexto').removeClass('collapse');
		}

		if (width <= 990) {
			$('.logoFooter').removeClass('float-left');
		}else{
			$('.logoFooter').addClass('float-left');
		}
	});

});
