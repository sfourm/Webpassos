<?php
date_default_timezone_set('America/Sao_Paulo');

// Passando os dados obtidos pelo formulário para as variáveis abaixo

$emaildestinatario = 'contato@webpassos.com.br';
$comcopiaoculta = 'samuelsergio@webpassos.com.br';
$assunto = 'WebPassos - Email de Contato';
$emailsender ='nao-responder@webpassos.com.br';
$nome = $_POST['nome'] or $_POST['nome2'];
$sobrenome = $_POST['sobrenome'] or $_POST['sobrenome2'];
$email = $_POST['email'] or $_POST['email2'];
$telefone = $_POST['telefone'] or $_POST['telefone2'];
$mensagem = $_POST['mensagem'] or $_POST['mensagem2'];
$data = date("j, m, Y, H:i:s");
$quebra_linha = "\n"; //Se "não for Windows"
$nomeremetente = $nome;
$emailremetente = $email;

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML =  '<p>Nome: '.$nome.' '.$sobrenome.'</p>
<p>Email: '.$email.'</p>
<p>Telefone: '.$telefone.'</p>
<p>Mensagem: '.$mensagem.'</p>
<p>Data: '.$data.'</p>';


/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-type: text/html; charset=uft-8" .$quebra_linha;

// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender . $quebra_linha;
$headers .= "Reply-To: " . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
/* Enviando a mensagem */

//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:
if(mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ 

    echo 'Email enviado com Sucesso!';

}else{

    echo 'Não foi possivel enviar o email';
}
?>
