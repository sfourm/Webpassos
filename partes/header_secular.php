<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>WebPassos  &mdash; Sites e Sistemas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Desenvolvimento de sites e sistemas web. Amplie sua marca com sites responsivos, otimizados e ideal para comercialização e engajamento. Sites e-commerce, portfólio, plataformas de curso e ensino a distancia, sites para casamentos e e diversos outros.">
    <meta name="keywords" content="criar site, sites, desenvolvimento web, sites em Passos-MG, sites em HTML, sites em CSS, desenvolvimento de sites, marketing, construção de sites, sistemas em Passos-MG, site em Passos-MG,">
    <meta name="author" content="Samuel Sergio">
    <link rel="shortcut icon" type="imagem/x-icon" href="../images/icone.png"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="social midia/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/paginas.css">

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#telefone2").mask("(00) 0000-00009")
        
        $("#telefone2").blur(function(event){
          if ($(this).val().length == 15){
            $("#telefone2").mask("(00) 00000-0009")
          }else{
            $("#telefone2").mask("(00) 0000-00009")
          }
        })
      })  
    </script>   
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="wrapper" style="position: relative;"> 
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <div><a href="../index.php"><img src="../images/logo.png" href="../index.html" style="height: 37.5px; width: 150px,"></img></a></div>
            <div class="mx-auto text-center">
              <nav class="site-navigation" role="navigation"i>
                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0" style="font-family:'Poppins', sans-serif; font-size: 12px;">
                  <li><a href="../index.php#servicos" class="nav-link">SERVIÇOS</a></li>
                  <li><a href="../index.php#produtos" class="nav-link">PRODUTOS</a></li>
                  <li><a href="../index.php#sobrenos" class="nav-link">QUEM SOMOS</a></li>
                  <li><a href="../index.php#contato" class="nav-link">ORÇAMENTO</a></li>
                </ul>
              </nav>
            </div>

            <div class="">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0" style="text-align: right;">
                  <li class="cta" id="btnlogin"><a href="../login.php" style="font-family:'Poppins', sans-serif; font-size: 12px;">ENTRAR</a></li>
                </ul>
              </nav>
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span style="color: white" class="icon-menu h3"></span></a>
            </div>
          </div>
        </div>  
      </header>