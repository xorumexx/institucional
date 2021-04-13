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
 
try {
$mail = new PHPMailer(true); //New instance, with exceptions enabled
 
/* CORPO DO E-MAIL */
$body .= "<h2>Enviando e-mails com AJAX e PHP via SMTP</h2>";
$body .= "Nome: $nome <br>";
$body .= "E-mail: $email <br>";
$body .= "Mensagem:<br>";
$body .= $msg;
$body .= "<br>";
$body .= "----------------------------";
$body .= "<br>";
$body .= "Enviado em <strong>".date("h:m:i d/m/Y")." por ".$_SERVER['REMOTE_ADDR']."</strong>"; //mostra a data e o IP
$body .= "<br>";
$body .= "----------------------------";
 
$mail->IsSMTP(); //tell the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = 465; //SMTP porta (as mais utilizadas são '25' e '587'
$mail->Host = "smail.mastermaq.com.br"; // SMTP servidor
$mail->Username = "leandroe@mastermaq.com.br";  // SMTP  usuário
$mail->Password = "Tenet2020*";  // SMTP senha
 
$mail->Send();  
 
$mail->AddReplyTo($email, $nome); //Responder para..
$mail->From = $email; //e-mail fornecido pelo cliente
$mail->FromName   = $nome; //nome fornecido pelo cliente
 
$to = "leandro.eustaquiosc@gmail.com"; //Enviar para
$mail->AddAddress($to); 
$mail->Subject  = "Assunto do E-mail"; //Assunto
$mail->WordWrap   = 80; // set word wrap
 
$mail->MsgHTML($body);
 
$mail->IsHTML(true); // send as HTML
 
$mail->Send();
echo 'Mensagem enviada com sucesso.'; //retorno devolvido para o ajax caso sucesso
} catch (phpmailerException $e) {
echo $e->errorMessage(); //retorno devolvido para o ajax caso erro
}

?>