<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
 
 
 
/* Recebe os dados do cliente ajax via POST */
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$msg = $_POST['mensagem'];
 
 
// Instância do objeto PHPMailer
$mail = new PHPMailer;
 
$mail -> charSet = "UTF-8"; 

$mail->Encoding = 'base64';

// Configura para envio de e-mails usando SMTP
$mail->isSMTP();
 
// Servidor SMTP
$mail->Host = 'smail.mastermaq.com.br';
 
// Usar autenticação SMTP
$mail->SMTPAuth = true;
 
// Usuário da conta
$mail->Username = 'leandroe@mastermaq.com.br';
 
// Senha da conta
$mail->Password = 'Tenet2020*';
 
// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';
 
// Porta do servidor SMTP
$mail->Port = 465;
 
// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);
 
// Email do Remetente
$mail->From = 'site@mastermaq.com.br';
 
// Nome do Remetente
$mail->FromName = 'Site Mastermaq';
 
// Endereço do e-mail do destinatário
//$mail->addAddress('marcelo.junior@mastermaq.com.br');
//$mail->addAddress('carlosa@mastermaq.com.br');
//$mail->addAddress('queiscila.santos@mastermaq.com.br');
//$mail->addAddress('wesllenp@mastermaq.com.br');
$mail->addAddress('leandroe@mastermaq.com.br');

// Assunto do e-mail
$mail->Subject = 'Contato | Alpha';
 
// Mensagem que vai no corpo do e-mail
$mail->Body  = "Nome : ".$nome. "
				<br>Email: ".$email. "
				<br>Telefone: ".$telefone. "
				<br>Mensagem: ".$msg."
				<br> Contato originado do site: <a href='https://www.mastermaq.com.br/alpha' target='_blank'>www.mastermaq.com.br/alpha</a>";	
		
 
// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;


?>