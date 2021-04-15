<footer>
	<div class="rodape-menus">
	<div class="container-fluid">
		<div class="row">
			<div class="rodape-menu-grid">
				<ul class="list-unstyled">
					<li><h6><a href="<?php echo htmlspecialchars(dirname(".")); ?>">Mastermaq</a></h6></li>
					<li><a href="https://contato.mastermaq.com.br/cliente/acesso" target="_blank">Área do cliente</a></li>
					<li><a href="sobre-nos">Sobre nós</a></li>
					<li><a href="carreiras">Trabalhe conosco</a></li>
					<!--<li><a href="podium">Podium</a></li>-->
					<li><a href="https://universidade.mastermaq.com.br/portal" target="_blank">Universidade</a></li>
					<li><a href="https://blog.mastermaq.com.br/" target="_blank">Blog Mastermaq</a></li>
					<li><a href="https://blog.mastermaq.com.br/materiais/" target="_blank">Materiais gratuitos</a></li>
				</ul>
			</div>
			<div class="rodape-menu-grid">
				<ul class="list-unstyled">
					<li><h6><a href="escritorios-contabeis">Escritórios Contábeis</a></h6></li>
					<li><a href="solucoes-ng">Soluções Essenciais NG</a></li>
					<li><a href="solucoes-evo">Soluções EVO</a></li>
					<li><a href="domo">Soluções DOMO</a></li>
				</ul>
			</div>
			<div class="rodape-menu-grid">
				<ul class="list-unstyled">
					<li><h6><a href="empresas">Soluções para Empresas</a></h6></li>
					<li><a href="micro-pequenas-empresas">Micro e Pequenas Empresas</a></li>
					<li><a href="medias-grandes-empresas">Médias e Grandes Empresas</a></li>
					<li><a href="sap">Clientes SAP Business One</a></li>
				</ul>
			</div>
			<div class="rodape-menu-grid">
				<ul class="list-unstyled">
					<li><h6><a href="servicos">Serviços</a></h6></li>
					<li><a href="onboarding">Onboarding</a></li>
					<li><a href="capacitacao">Capacitação</a></li>
					<li><a href="suporte">Suporte</a></li>
					<li><a href="experiencia-do-cliente">Experiência do Cliente</a></li>
					<li><a href="gestao-de-contas">Gestão de Contas</a></li>
					<li><a href="iaas">Infrastructure as a Service</a></li>
				</ul>
			</div>
			<div class="rodape-menu-grid rodape-contatos">
				<ul class="list-unstyled">
					<li><h6>Quero ser cliente</h6></li>
					<li>Comercial: 0800 941 7500</li>
					<li><a href="mailto:comercial@mastermaq.com.br">comercial@mastermaq.com.br</a></li>
				</ul>
				<br>
				<ul class="list-unstyled">
					<li><h6>Falar com a Mastermaq</h6></li>
					<li><span>Belo Horizonte:</span> (31) 3519 7500</li>
					<li><span>São Paulo:</span> (31) 5083 7771</li>
				</ul>
			</div>
		</div>
	</div>
	</div>
	<div class="rodape-creditos">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-12 col-12 p-0">
				<a class="navbar-brand" href="<?php echo htmlspecialchars(dirname(".")); ?>"><img src="assets/img/logo-mastermaq-branca.png"></a>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-12 p-0 text-center">
				<p>Todos os direitos reservados | <a href="http://www.mastermaq.com.br/privacidade">Políticas de privacidade e termos de uso</a></p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-12 col-12 p-0 text-right">
				<ul class="redes-sociais">
					<li><a href="https://www.facebook.com/mastermaq.software/" target="_blank"><img src="assets/img/icon-facebook.png"></a></li>
					<li><a href="https://www.instagram.com/mastermaq.software/" target="_blank"><img src="assets/img/icon-instagram.png"></a></li>
					<li><a href="https://www.linkedin.com/company/mastermaq/" target><img src="assets/img/icon-linkedin.png"></a></li>
					<li><a href="https://www.youtube.com/user/MastermaqSoftwares" target="_blank"><img src="assets/img/icon-youtube.png"></a></li>
				</ul>
			</div>
		</div>
	</div>
	</div>
</footer>

<!--WHATSAPP-->
<div class="whatsapp-opcoes animated" style="display:none;">
	<div class="whatsapp-opcoes-conteudo">
		<h4><img src="assets/img/whatsapp-mastermaq.png"></h4>	
		<p>Escolha uma das opções para direcionarmos ao nosso time.</p>
		<?php if ($identificador == 'Site | alpha'): ?>
		<a href="https://api.whatsapp.com/send?phone=5531984375903" target="_blank"><h4 class="mt-4">Quero ser cliente</h4>
		<p>Quero adquirir soluções Mastermaq</p></a>
		
		<a href="https://api.whatsapp.com/send?phone=5531984375903" target="_blank"><h4 class="mt-4">Já sou cliente</h4>
		<p>Desejo adquirir novas soluções.</p></a>
		<?php else:?>
		<a href="https://whts.co/Querosercliente" target="_blank"><h4 class="mt-4">Quero ser cliente</h4>
		<p>Quero adquirir soluções Mastermaq</p></a>
		
		<a href="https://whts.co/Souclientemastermaq" target="_blank"><h4 class="mt-4">Já sou cliente</h4>
		<p>Desejo adquirir novas soluções.</p></a>
		<?php endif?>
	</div>	
</div>

<div class="btn-whatsapp" style="display:;">
	<img src="assets/img/icon-whatsapp.png"> WhatsApp Comercial
</div>

<div class="btn-whatsapp-fechar" style="display:none;">
	<i class="fas fa-times"></i>
</div>
<!--FIM WHATSAPP-->

<!--JS-->
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="assets/js/moveTo.min.js" type="text/javascript"></script>
<script src="assets/js/aos.js" type="text/javascript"></script>
<script src="assets/js/vimeo.js" type="text/javascript"></script>
<script src="assets/js/mask.js" type="text/javascript"></script>
<script src="assets/js/jquery.visible.min.js" type="text/javascript"></script>
<script src="assets/js/funcoes.js" type="text/javascript"></script>
<script>
  AOS.init();
</script>
<!--FIM JS-->

<script>

var observer = new IntersectionObserver(function(entries) { console.log(entries);
	if(entries[0]['isIntersecting'] === true) {
		if(entries[0]['intersectionRatio'] === 1)
			;
		else if(entries[0]['intersectionRatio'] > 0.5)

			document.querySelector('.btn-whatsapp').classList.add("r");
		else
			document.querySelector('.btn-whatsapp').classList.remove("r");;
	}
	else {
		;
	}
}, { threshold: [0, 0.5, 1] });

observer.observe(document.querySelector(".rodape-creditos"));


</script>
