$(function(){

	var index = sessionStorage.getItem("ind");
	var id = sessionStorage.getItem("id");

	if(index == null){
		index = 1;
		id = "softwares";
	}

	$("#content div:nth-child("+index+")").show();
	$(".abas li div#"+id).addClass("selecionada");

	sessionStorage.clear();

	$(".aba").hover(
    function(){$(this).addClass("ativa")},
    function(){$(this).removeClass("ativa")}
	);


	$(".aba").click(function(){
	    $(".aba").removeClass("selecionada");
	    $(this).addClass("selecionada");

	    var indice = $(this).parent().index();
	    indice++;
	    $("#content div").hide();
	    $("#content div:nth-child("+indice+")").show();
	    console.log("teste indice: "+indice);

	    if (indice==1) {
	    	$('.software').show();
	    }else if (indice==2) {
	    	$('.jogo').show();
	    }else if (indice==3) {
	    	$('.manual').show();
	    }
	});

});
