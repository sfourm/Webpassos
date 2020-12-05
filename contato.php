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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="js/mascara.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <section class="intro-section2 " id="home" > 
        <div class="slide-2" style="background-image: url('images/FUNDO.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">    
            <div class="row fjustiy-content-between">           
              <div class="col-lg-4 col-md-12 text-center mt-5 p-3">
                <a href="index.php"><img src="images/logo.png"></img></a>
                <p>Faça parte do nosso time. Entre em contato!</p>
              </div>
              
              <div class="col-lg-4 col-md-12 mt-5 p-3">
                <form method="post" class="form-box row">
                  <br>
                  <h3 class="h4 mb-4 text-center">Junte-se a nós! </h3>
                  <p>Faça seu orçamento gratuitamente!</p>
              
                  <div class="form-group col-12 justify-content-center" >
                    <input name="nome" type="text" class="form-control col-5 text-capitalize" placeholder="Nome" required>
                    <input name="sobrenome" type="text" class="form-control col-5 text-capitalize" placeholder="Sobrenome" required>
                  </div>
                  <div class="form-group col-12 justify-content-center" >
                    <input name="email" type="email" class="form-control col-5" placeholder="Email" required>
                    <input id="telefone" name="telefone" type="text" class="form-control col-5" placeholder="Telefone" required>
                  </div>
                  <div class="form-group col-12 justify-content-center" >
                    <textarea name="mensagem" class="form-control col-10" rows="3" placeholder="Escreva sua mensagem!" required ></textarea>
                  </div>
                  <div class="form-group pb-3">
                    <button type="submit" class="btn btncadastrar" id="btn-enviar-email">Enviar</button>
                  </div>
                  <div class="col-md-12 text-center mt-3 text-info" id="div-mensagem"></div>
                </form>
              </div> 
    
              <div class="col-lg-4 col-md-12 justify-content-center mt-5 p-3">
                <form class="form-box">
                  <br>
                  <h3 class="h4 mb-4 text-center">Redes Sociais</h3>
                  <p>Entre em contato</p>
                  <div class="justify-content-center">
                    <div class="d-block text-center pt-3">
                      <div>  
                      <a href="https://api.whatsapp.com/send?phone=5535992711145&text=Ol%C3%A1%2C%20gostaria%20de%20entrar%20em%20contato%20com%20voces!" target="blank" rel="noopener noreferrer"><img src="images/png/011-whatsappcinza.png" alt="" id="images"></a>
                      </div>
                      <div>
                        <a href="https://api.whatsapp.com/send?phone=5535992711145&text=Ol%C3%A1%2C%20gostaria%20de%20entrar%20em%20contato%20com%20voces!" target="blank" rel="noopener noreferrer">WHATSAPP</a>
                      </div>
                    </div>
                    <div class="text-center pt-3">
                      <div>
                        <a href="https://www.instagram.com/webpassos_/"  target="blank" rel="noopener noreferrer"><img src="images/png/048-instagramcinza.png" alt="" id="images"></a>
                      </div>
                      <div>
                        <a href="https://www.instagram.com/webpassos_/"  target="blank" rel="noopener noreferrer">INSTAGRAM</a>
                      </div>
                    </div>
                    <div class="d-block text-center pt-3 pb-30">
                      <div>
                        <a href="https://www.facebook.com/webpassos.sistemas" target="blank" rel="noopener noreferrer"><img src="images/png/001-facebookcinza.png" alt="" id="images"></a>
                      </div>
                      <div>
                        <a href="https://www.facebook.com/webpassos.sistemas" target="blank" rel="noopener noreferrer">FACEBOOK</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>                             
            </div>
          </div>
        </div>
      </section>
<!-- FIM do contaudo principal. -->

<?php require_once "footer_principal.php"?>
