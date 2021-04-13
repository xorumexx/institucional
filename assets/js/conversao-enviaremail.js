/*FORMULÁRIO*/
$(document).ready(function() {

	$('form').on('submit', function(event){
		//Impede o recarregamento da pagina
		event.preventDefault();
		var rdtrkCookie = decodeURIComponent(getCookie("rdtrk"));
		//Serializa dados do formulario submitado
		
		var data_array = [{
		  name: 'email',
		  value: $("#email").val()
		},
		{
		  name: 'identificador',
		  value: $('#identificador').val()
		},
		{
		  name: 'token_rdstation',
		  value: $('#token_rdstation').val()
		},
		 {
		  name: 'traffic_source',
		  value: rdtrkCookie
		},
		 {
		  name: 'telefone',
		  value: $('#telefone').val()
		},
		{
		  name: 'mensagem',
		  value: $("#mensagem").val()
		},
		{
		  name: 'nome',
		  value: $("#nome").val()
		}
		];
		
		$.ajax({
			   type: "POST", /* tipo post */
			   url: "email/enviar-email.php", /* endereço do script PHP */
			   async: true,
			   data: data_array, /* informa Url */
			   success: function(data) { /* sucesso */
				   /* alert(data) */
				   /* pode ser utilizado um alert para ver o retorno */
				   $('#envia').hide();
				   $('.enviando').show();
			   },
			   beforeSend: function() { /* antes de enviar */
				 //$('.loading').fadeIn('fast'); /* mostra o loading */
				// alert("enviando");
					$('#envia').hide();
					$('.enviando').show();
			   },
			   complete: function(){ /* completo */
				  //$('.loading').fadeOut('fast'); /* esconde o loading */
				   	$('.formulario-enviado').slideToggle();
					$('#conversion-form')[0].reset();
					setTimeout(function(){ $('.formulario-enviado').slideToggle(); }, 8000);
					$('.enviando').hide();
					$('#envia').show();
			   }
			});
		
		if( rdtrkCookie !== "" ) data_array.push( { name: 'traffic_source', value: rdtrkCookie } );
		console.log(data_array);
		RdIntegration.post(data_array, function() {
		
			
			
			
			
			
			
			
			
			
		
	
		});

		
	});


	
  });
	  
function getCookie(cname) { var name = cname + "="; var ca = document.cookie.split(';'); for(var i= 0; i <ca.length; i++) { var c = ca[i]; while (c.charAt(0)==' ') { c = c.substring(1); } if (c.indexOf(name) == 0) { return c.substring(name.length,c.length); } } return "";}
/*FIM FORMULÁRIO*/