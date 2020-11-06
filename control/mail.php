<?php 

if(isset($_POST['email']) && !empty($_POST['email']))

$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "contato@webpassos.com.br";
$subject = "Contato - Programador BR";
$body = "Nome= ".$nome. "r\n".
        "Sobrenome= ".$sobrenome. "r\n".
        "Telefone= ".$telefone. "r\n".
        "Email= ".$email. "r\n".
        "Mensagem= ".$mensagem;
$header = "From:samuelsergio@webpassos.com"."r\n"
                ."Reply-to: ".$email."r\n"
                ."X=Mailer:PHP/".phpversion();


?>
