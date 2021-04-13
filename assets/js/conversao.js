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
		  name: 'nome',
		  value: $("#nome").val()
		}
		];
		if( rdtrkCookie !== "" ) data_array.push( { name: 'traffic_source', value: rdtrkCookie } );
		console.log(data_array);
		RdIntegration.post(data_array, function() {
			$('.formulario-enviado').slideToggle();
			$('#conversion-form')[0].reset();
			setTimeout(function(){ $('.formulario-enviado').slideToggle(); }, 8000);
		
	
		});

		

		//Mostra animação de envio
		form_send( $(this) );
	});


	
  });
	  
function getCookie(cname) { var name = cname + "="; var ca = document.cookie.split(';'); for(var i= 0; i <ca.length; i++) { var c = ca[i]; while (c.charAt(0)==' ') { c = c.substring(1); } if (c.indexOf(name) == 0) { return c.substring(name.length,c.length); } } return "";}
/*FIM FORMULÁRIO*/