/*FUNÇÕES SITE*/

/*Menu mobile*/
$(".navbar-toggler").click(function() {
	$( ".navbar-toggler > i" ).toggleClass("fa-times");

});
/*Fim Menu mobile*/

/*Video*/
$(".play").click(function() {
		$( this ).parent("div").parent("div").next(".video-executando").fadeIn();	
	$( this ).parent("div").parent("div").next(".video-executando").find('iframe').vimeo("play");

});

$(".video-fechar").click(function() {
	$("iframe").vimeo("pause");
	$('.video-executando').fadeOut();	
	$('.video-capa').show();
});
/*Fim Video*/

/*Ajustar tamanho do menu após rolagem*/
$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('body').addClass('rolagem');
    } else {
       $('body').removeClass('rolagem');
    }
});	
/*Fim Ajustar tamanho do menu após rolagem*/

var behavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
options = {
    onKeyPress: function (val, e, field, options) {
        field.mask(behavior.apply({}, arguments), options);
    }
};

$('.phone').mask(behavior, options);


/*SCROLL*/
document.addEventListener('DOMContentLoaded', function(){
  const easeFunctions = {
	easeInQuad: function (t, b, c, d) {
	  t /= d;
	  return c * t * t + b;
	},
	easeOutQuad: function (t, b, c, d) {
	  t /= d;
	  return -c * t* (t - 2) + b;
	}
  }
  const moveTo = new MoveTo({
	ease: 'easeInQuad'
  }, easeFunctions);
  const triggers = document.getElementsByClassName('js-trigger');
  for (var i = 0; i < triggers.length; i++) {
	moveTo.registerTrigger(triggers[i]);
  }
});
/*SCROLL*/

/*WHATSAPP*/
$('.btn-whatsapp').click(function(){
	$('.btn-whatsapp').fadeOut(50);
	$('.whatsapp-opcoes').addClass('fadeinUp');
	$('.whatsapp-opcoes').show();
	$('.btn-whatsapp-fechar').fadeIn(200);
});

$('.btn-whatsapp-fechar').click(function(){
	$('.whatsapp-opcoes').removeClass('fadeinUp');
	$('.whatsapp-opcoes').fadeOut(300);
	$('.btn-whatsapp-fechar').fadeOut(50);
	$('.btn-whatsapp').fadeIn(200);
})	
	
/*FIM WHATSAPP*/

