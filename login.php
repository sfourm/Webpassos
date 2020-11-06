<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>WebPassos  &mdash; Sites e Sistemas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desenvolvimento de sites e sistemas web. Amplie sua marca com sites responsivos, otimizados e ideal para comercialização e engajamento. Sites e-commerce, portfólio, plataformas de curso e ensino a distancia, sites para casamentos e e diversos outros.">
    <meta name="keywords" content="criar site, sites, desenvolvimento web, sites em Passos-MG, sites em HTML, sites em CSS, desenvolvimento de sites, marketing, construção de sites, sistemas em Passos-MG, site em Passos-MG,">
    <meta name="author" content="Samuel Sergio">
    <link rel="shortcut icon" type="imagem/x-icon" href="images/icone.png"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="fonts/social midia/flaticon.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#telefone").mask("(00) 0000-00009")
			$("#telefone").blur(function(event){
				if ($(this).val().length == 15){
					$("#telefone").mask("(00) 00000-0009")
				}else{
					$("#telefone").mask("(00) 0000-00009")
				}
			})
    })  
    </script>
    <script>
    function validarSenha(){
      var senha1 = cadastro.senha.value;
      var senha2 = cadastro.confirma_senha.value;
      if (senha1 != senha2)
        alert ('Senhas Diferentes')}
    </script>
  </head>
  <body>
    <div class="wrapper">
      <section class="intro-section2 " id="home" > 
        <div class="slide-2" style="background-image: url('images/FUNDO.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">    
            <div class="row fjustiy-content-between">           
              <div class="col-lg-4 col-md-12" style="text-align: center; margin-top: 30px;">
                <a href="index.php"style="font-family: 'Bebas Neue', sans-serif; color: #fff; font-size: 50px;"><img src="images/logo.png"></img></a>
                <h1>LOGIN</h1>
                <p style="font-size: 30px; color:white; margin-top:-70px;">Faça login e venha fazer parte de nosso time!</p>
              </div>
              
              <div class="col-lg-4 col-md-5" style="margin: 0px;">
                <form action="control/userlogin.php" method="post" class="form-box2">
                  <h3 class="h4 mb-4" style="font-size: 30px; text-align: center; font-weight: 600; ">Entrar</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input name="senha" type="password" class="form-control" placeholder="Senha" id="senha">
                  </div>
                  <div style="color: black; display: block; text-align: center;"  class="form-group">
                    <button type="submit" class="btn btn-primary" id="btncadastrar">Entrar</button>
                    <a href="contro/esqueceuasenha.php" style="display: block; text-align: center; font-size: 13px; ">Esqueceu sua senha?<strong> Entre aqui</strong></a>
                  </div>
                </form>
              </div> 
    
              <div class="col-lg-4 col-md-5">
                <form name="cadastro" action="control/cadastro.php" method="post" class="form-box2">
                  <h3 class="h4 mb-4" style="font-size: 30px; text-align: center; font-weight: 600; ">Cadastrar</h3>
                  <?php
                  if(isset($_SESSION['status_cadastro'])):
                  ?>
                  <div style="text-align: center;">
                    <p>Cadastrado com sucesso!</p>
                  </div>
                  <?php
                  endif;
                  unset($_SESSION['status_cadastro']);?>
                  
                <?php
                  if(isset($_SESSION['email_existe'])):
                  ?>
                  <div style="text-align: center;">
                    <p>ERRO: Email já cadastrado.</p>
                  </div>
                  <?php
                  endif;
                  unset($_SESSION['email_existe']);?>

                  <?php
                  if(isset($_SESSION['telefone_existe'])):
                  ?>
                  <div style="text-align: center;">
                    <p>ERRO: Telefone já cadastrado.</p>
                  </div>
                  <?php
                  endif;
                  unset($_SESSION['telefone_existe']);?>

                  <div class="form-group">
                    <input style=" text-transform: capitalize;" name="nome"  type="text" class="form-control" placeholder="Nome" maxlength="22" required>
                  </div>
                  <div class="form-group"> 
                    <input  style=" text-transform: capitalize;"  name="sobrenome" type="text" class="form-control" placeholder="Sobrenome" maxlength="22" required>             
                  </div>
                  <div class="form-group"> 
                    <input  name="telefone" type="text" class="form-control" placeholder="Telefone" id="telefone" required>
                  </div>
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email" maxlength="60" required>
                  </div>
                  <div class="form-group">
                    <input name="senha" type="password" placeholder="Senha" class="form-control" minlength="8" maxlength="16"required>
                  </div>
                  <div class="form-group">
                    <input name="confirma_senha"type="password" placeholder="Confirme a senha" class="form-control" minlength="8" maxlength="16"required>
                  </div>
                  <div class="row form-group justify-content-center align-items-center">
                    <input class="col-1" type="checkbox" id="concordo" class="form-control" style="width: 20px" required>
                    <label class="col-10" style="font-size: 13px;">Eu aceito e concordo com os <a href="pag/termos-de-uso.html">Termos de Uso & Política de Privacidade.</a></label> 
                  </div>
                  <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn" id="btncadastrar" onClick="validarSenha()">Cadastrar</button>
                  </div>
                </form>
              </div>                             
            </div>
          </div>
        </div>
      </section>
<!-- FIM do contaudo principal. -->

<?php require_once "partes/footer_principal.php"?>