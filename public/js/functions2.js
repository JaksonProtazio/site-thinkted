$(document).ready(function(){

	var $target = $(".anime"),
		animationClass = "anime-start",
		offset = $(window).height()*4/5;

	var documentTop = $(document).scrollTop();

	var altura = $(document).height();

	var alturaIdeal = 69*altura/100;

	var ativar = true;

	function animeScroll(){
		$target.each(function(){
			var itemTop = $(this).offset().top;

			documentTop = $(document).scrollTop();

			if (documentTop > itemTop - offset)
			{
				$(this).addClass(animationClass);

			}else
			{
				$(this).removeClass(animationClass);
			}
		});

	}

	animeScroll();

	$(window).scroll(function(){
		if (documentTop > alturaIdeal) {
			console.log("altura do documento: " + documentTop);
			console.log("altura ideal: " + alturaIdeal);
			ativar = false;
		}

		if (ativar) {
			animeScroll();
		}
	});

});




//<!-- Animação rolagem suave -->
jQuery(document).ready(function($) {
	var menuHeight = $('nav').innerHeight();

    $(".scroll").click(function(event){

	    $('html,body').animate({scrollTop:$(this.hash).offset().top-menuHeight}, 600);
	});
});
//<!-- fim animação -->
