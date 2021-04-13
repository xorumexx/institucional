<div class="formulario" id="Formulario" style="display:;">
	<form id="conversion-form">
		<input type="hidden" class="d-none" name="token_rdstation" id="token_rdstation" value="b680334569abc5d22ad57cf8fc31a00d">
		<input type="hidden" class="d-none" name="identificador" id="identificador" 
		value="<?php echo htmlspecialchars($identificador); ?>">
		<div class="form-group">
			<label>Nome</label>	
			<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
		</div>	
		<div class="form-group">
			<label>E-mail</label>	
			<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
		</div>	
		<div class="form-group">
			<label>Telefone</label>	
			<input type="text" class="form-control phone" id="telefone" name="telefone" minlength="10" maxlength="11" placeholder="Digite seu telefone (xx) xxxx-xxxx" required>
		</div>
		<?php if ($identificador == 'Site | alpha'): ?>
		<div class="form-group">
			<label>Mensagem</label>	
			<textarea class="form-control" rows="4" id="mensagem" name="mensagem" style="resize:none!important;"></textarea>
		</div>	
		<?php endif?>
		<div class="form-group">
			<button class="btn btn-vermelho btn-sm" id="envia">Quero saber mais</button>
			<p style="color:#fff!important;font-size:16px;display:none;" class="enviando"><i class="fas fa-spinner fa-spin"></i> Enviando o formulário...</p>
		</div>	
	</form>
	<div class="formulario-enviado" style="display:none;">
	<h3>Recebemos sua mensagem.</h3><br>
	<p>Obrigado pelo contato.<br> Em breve um de nossos especialistas entrará em contato com você.</p>
	</div>	
</div>


<!-- Script para envio RD Station -->
<script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
<?php if ($identificador == 'Site | alpha'): ?>
<script type="text/javascript" src="assets/js/conversao-enviaremail.js"></script>
<?php else:?>
<script type="text/javascript" src="assets/js/conversao.js"></script>
<?php endif?>
