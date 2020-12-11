<?php require_once "header_principal.php"?>

    <!-- INICIO do conteudo principal. -->
      <div class="intro-section justify-content-center" id="home">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="15000">
          <div class="carousel-inner">
            <div class="carousel-item active"> 
              <div class="slide1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5" alt="First Slide">
                <div class="container">
                  <div class="row align-items-center" >
                    <div class="col-12">
                      <div class="row justify-content-center text-center">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6 col-md-12">
                          <br>
                          <br>
                          <br>
                          <h1 class="text-center">Ampliar sua marca nunca foi tão fácil!</h1>
                          <p class="mb-4 text-center">A vida é um conjunto de ciclos, cabe a nós nos adaptarmos e prepararmos para tais. Venha fazer parte do nosso time, e juntos, realizaremos grandes conquistas. Automatize suas vendas, acompanha de perto seus resultados, faça um upgrade e comece uma nova etapa  da melhor forma. </p>
                        </div>
                        
                        <div class="col-lg-4 col-md-12">
                          <form id="form-2" name="form-2" method="post" class="form-box row">
                            <br>
                            <h3 class="h4 mb-4 text-white" >Junte-se a nós! </h3>
                            <p>Faça seu orçamento gratuitamente!</p>
                            <div class="form-group col-12 justify-content-center text-center">
                              <input id="nome2" name="nome2" type="text" class="form-control col-5 text-capitalize" placeholder="Nome" required>
                              <input id="sobrenome2" name="sobrenome2" type="text" class="form-control col-5 text-capitalize" placeholder="Sobrenome" required>
                            </div>
                            <div class="form-group col-12 justify-content-center text-center">
                              <input id="email2" name="email2" type="email" class="form-control col-5" placeholder="Email" required>
                              <input id="telefone2" name="telefone2" type="text" class="form-control col-5" placeholder="Telefone" required>
                            </div>
                            <div class="form-group col-12 justify-content-center text-center d-flex">
                              <textarea id="mensagem2" name="mensagem2" class="form-control col-10  " rows="3" placeholder="Escreva sua mensagem!" required ></textarea>
                            </div>
                            <div class="pb-3 text-center form-group">
                              <button type="submit" class="btn btncadastrar" id="btn-enviar-email">Enviar</button>
                            </div>
                            <div class="col-md-12 text-center mt-3 text-info" id="div-mensagem2"></div>
                          </form> 
                        </div>
                        <div class="col-lg-1"></div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="slide2" style="background-image: url('images/FUNDO.jpg');" data-stellar-background-ratio="0.5" alt="Second Slide">
                <div class="container">
                  <div class="row justify-content-center align-items-center pt-5 text-center" >
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 col-md-12 pt-5 justify-content-center">
                      <div>
                        <h3>O amanhã depende somente de você!</h3>
                      </div>
                      <div>
                        <p class="text-center">O sucesso nasce do querer, da determinação e persistência em se chegar a um objetivo. Mesmo não atingindo o alvo, quem busca e vence obstáculos, no mínimo fará coisas admiráveis</p>
                        <p class="text-center pt-2"><a href="#produtos" id="btnsaiba2">Saiba mais!</a></p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 justify-content-center">
                      <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid" style="width: 500px;">
                    </div>
                    <div class="col-lg-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>                   
      <div class="site-section" id="servicos">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-9 text-center">
              <h4 class="section-title"><b>O que fazemos?</b></h4>           
              <p>Desenvolvemos e criamos sites e sistemas web, sempre visando a elegância e funcionabilidade. Atendemos vários âmbitos e nossos produtos são feitos sob encomendas, de acordo com a necessidade e realidade do cliente. </p>
            </div>
          </div>
          <div class="row mb-5 align-items-center pr-3 pl-3">
            <div class="col-lg-5 mb-5 order-lg-1">
              <img src="images/1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 mr-auto order-2 order-lg-2 text-right">
              <h2 class="text-black mb-4"><b>Sites disponíveis</b></h2>
              <p class=" ">De uma loja online até o infinito. Criamos e produzimos de acordo com sua ideia ou referência. Entre as ideias mais populares, são elas: plataforma de vendas, plataforma de cursos, portfólio, sites empresarias e diversas outras. </p>
              <p class="pt-3" ><a href="#sites" id="btnsaiba">Acessar</a></p>
            </div>
          </div>

          <div class="row">
            <div div class="col-lg-6 ml-auto order-2 order-lg-1">
              <h2 class="text-black mb-4 text-left"><b>Sistemas</b></h2>
              <p class=" text-left">Sistemas pessoais ou empresariais, para cadastros, faturamento, dashboard, logins e usuários, restaurante e diversos outros projetos a sua disposição. </p>
              <p class="text-left pt-3 pt-1"><a href="#sistemas" class="py-2 px-3" id="btnsaiba">Acessar</a></p>
            </div>
            <div class="col-lg-5 mb-5 order-1 order-lg-2 ">
              <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid text-left">
            </div> 
          </div>
        
          <div class="row mb-5 align-items-center pl-3 pr-3">
            <div class="col-lg-5 mb-5 ">
              <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-6 mr-auto order-2 order-lg-2 text-right" >
              <h2 class="text-black mb-4" ><b>Marketing</b></h2>
              <p class="mb-4">Emails com sua marca, serviços de SMTP, automatização, pop-up, personalização e consultoria para marketing digital, incluindo Facebook, Instagram e Google Ads</p>
              <p class="pt-3 pt-1"><a href="marketing.php" class="py-2 px-3" id="btnsaiba">Acessar</a></p>
            </div>  
          </div>
        </div>
      </div>
      <div id="produtos"></div>
      <div class="site-section titulo-produtos bg-white" id="sites">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
              <h4 class="section-title"><b>Sites Disponíveis</b></h4>
              <p class="text-center">Desenvolvemos e criamos sites e sistemas web, sempre visando a elegância e funcionabilidade. Atendemos vários âmbitos e nossos produtos são feitos sob encomendas, de acordo com a necessidade e realidade do cliente.</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section produtos-classe">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="produtos col-lg-4 col-md-4">
              <figure class="">
                <a href="html-e-css.php"><img src="images/html.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="html-e-css.php"><b>HTML/CSS</b></a></h3>
                <p>Tenha um site através da super junção HTML/CSS e alguns framework's.</p>
              </div>           
            </div>

            <div class="produtos col-lg-4 col-md-4">
              <figure>
                <a href="wordpress.php"><img src="images/wordpress.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="wordpress.php"><b>WORDPRESS</b></h3>
                <p>A modernidade e facilidade em suas mãos, sem a necessidade de conhecimento.</p>
              </div>         
            </div>

            <div class="produtos col-lg-4 col-md-4">
              <figure >
                <a href="responsivos.php"><img src="images/responsivo.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="responsivos.php"><b>RESPONSIVOS</b></a></h3>
                <p>Acessibilidade por qualquer despositivo, sem oscilação da qualidade. </p>
              </div>
            </div>

            <div class="produtos col-lg-4 col-md-4">
              <figure>
                <a href="e-commerce.php"><img src="images/ecommerce.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="e-commerce.php"><b>E-COMMERCE</b></a></h3>
                <p>Amplie suas vendas entrando no mercado digital. Fácil e sem burocracia. </p>
              </div>
            </div>

            <div class="produtos col-lg-4 col-md-4">
              <figure>
                <a href="plataforma-de-ead.php"><img src="images/ead.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="plataforma-de-ead.php"><b>EAD/CURSOS ONLINE</b></a></h3>
                <p>Sua plataforma de cursos, totalmente independente e segura, oferecendo maior controle. </p>
              </div>
            </div>

            <div class="produtos col-lg-4 col-md-4">
              <figure>
                <a href="portfolio.php"><img src="images/portfolio.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="portfolio.php"><b>PORTFÓLIO</b></a></h3>
                <p> Traga seu portofólio ou de sua empresa para o mercado web, deixando sua identidade. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section titulo-produtos bg-white" id="sistemas">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
              <h4 class="section-title"><b>Sistemas Disponíveis</b></h4>
              <p class="text-center">Sistemas web a pronta entrega. Tenha controle, informações e automatização de seus processos. Sistemas de login/cadastro, dashboard, aplicação de notas e formulários, painel admin, dados analíticos, e diversos outros.</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section produtos-classe">
        <div class="container text-center">
          <div class="row justify-content-center pt-5">

            <div class="produtos col-lg-4 col-md-4">
              <figure>
                <a href="dashboard.php"><img src="images/dashboard.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="dashboard.php"><b>Dashboard</b></a></h3>
                <p>Tenha a opção de abranger todos seus clientes, oferecendo serviços digitais. </p>
              </div>             
            </div>

            <div class="produtos col-lg-4 col-md-4">
              <figure>
                <a href="compras-online.php"><img src="images/compras.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="compras-online.php"><b>Compras Online</b></a></h3>
                <p>Tenha a opção de abranger todos seus clientes, oferecendo serviços digitais. </p>
              </div>             
            </div>

            <div class="produtos col-lg-4 col-md-4">
              <figure >
                <a href="painel-administrativo.php"><img src="images/painel.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="painel-administrativo.php"><b>Painel Administativo</b></a></h3>
                <p>Uma área específica para sua administração, contendo diversas opções e finalidades</p>
              </div>
            </div>

            <div class="produtos col-lg-3 col-md-4">
              <figure>
                <a href="login-e-cadastro.php"><img src="images/login.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="texto-interno py-4 px-4">
                <h3><a href="login-e-cadastro.php"><b>Login e Cadastro</b></a></h3>
                <p>Determine e classifique todos aqueles que acompanham seu site ou serviços. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section pb-0" id="sobrenos">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-9 mb-5 text-center">
              <h4 class="section-title"><b>Sobre nós</b></h4>
              <p class="mb-7">Localizado em Passos-MG, a equipe <a href="https://www.webpassos.com.br" target="_blank"><span><strong>WEBPASSOS</strong></span> desenvolve projetos visando o mercado web. Trabalhamos em diversas finalidades, do back-end ao front, nos adaptando para cada cliente e usuário. Caso tenha interesse sobre saber mais ou entrar em contato, nos acompenhe pelas redes sociais.</a></p>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4" id="profissional">
              <div class="desenvolvedor">
                <img src="images/pro1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                <div >
                  <h3>Samuel Sergio</h3>
                  <p class="position">Desenvolvedor junior</p>
                  <p>"E não nos cansemos de fazer o bem, pois no tempo próprio colheremos, se não desanimarmos" - Gálatas 6:9</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4" id="profissional">
              <div class="desenvolvedor">
                <img src="images/pro2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                <div >
                  <h3>Diego Becker</h3>
                  <p class="position">Desenvolvedor junior</p>
                  <p>"Nossa maior fraqueza está em desistir. O caminho mais certo de vencer é tentar mais uma vez." - Thomas Edison</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
              <h4 class="section-title"><b>Por que nossos serviços?</b></h4>
            </div>
            <div class="col-lg-6 col-md-12 justify-content-center d-flex align-items-center">
              <div class="bg-white sobre-nos">
                <div class="d-flex align-items-center fundo-icone icone-light mb-3">
                  <div class="mr-3"><span class="icone-interno"><span class="icon   icon-legal"></span></span></div>
                  <div><h3 class="m-0">Oferecemos garantia e estabilidade em todos nossos produtos e serviços.</h3></div>
                </div>

                <div class="d-flex align-items-center fundo-icone icone-light mb-3">
                  <div class="mr-3"><span class="icone-interno"><span class="icon icon-security"></span></span></div>
                  <div><h3 class="m-0">Ética e segurança são nossa prioridade para quaisquer situações.</h3></div>
                </div>

                <div class="d-flex align-items-center fundo-icone icone-light mb-3">
                  <div class="mr-3"><span class="icone-interno"><span class="icon icon-print"></span></span></div>
                  <div><h3 class="m-0">Notas fiscais em todos os produtos, oferecendo melhor garantia e segurança.</h3></div>
                </div>

                <div class="d-flex align-items-center fundo-icone icone-light mb-3">
                  <div class="mr-3"><span class="icone-interno"><span class="icon icon-server"></span></span></div>
                  <div><h3 class="m-0">Servidores de exímia qualidade e infraestrutura - Locaweb.</h3></div>
                </div>

                <div class="d-flex align-items-center fundo-icone icone-light mb-3">
                  <div class="mr-3"><span class="icone-interno"><span class="icon icon-pencil"></span></span></div>
                  <div><h3 class="m-0">Personalização e desenvolvimento para pequenos, medios ou grandes projetos.</h3></div>
                </div>

                <div class="d-flex align-items-center fundo-icone icone-light">
                  <div class="mr-3"><span class="icone-interno"><span class="icon icon-users"></span></span></div>
                  <div><h3 class="m-0">Todos nossos serviços será de sua propriedade, tendo controle e administração.</h3></div>
                </div>
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-md-12 mt-5 text-center ml-5" >
              <img src="images/person_transparent.png" alt="Image" style="width: 420px;">
            </div>
          </div>
          <div id="orcamento"></div>
        </div>
      </div>
    <!-- ORÇAMENTO -->
      <?php require_once "formulario.php"?>
    <!-- ORÇAMENTO -->
<!-- FIM do contaudo principal. -->

    <?php require_once "footer_principal.php"?>

<script src="js/enviar-email2.js"></script>
