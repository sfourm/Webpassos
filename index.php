    <?php require_once "partes/header_principal.php"?>

    <!-- INICIO do conteudo principal. -->
    <div class="intro-section justify-content-center" id="home">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="15000">
        <div class="carousel-inner">
          <div class="carousel-item active"> 
            <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5" alt="First Slide">
              <div class="container">
                <div class="row align-items-center" >
                  <div class="col-12">
                    <div class="row justify-content-center">
                      <div class="col-lg-1"></div>
                      <div class="col-lg-6 col-md-5" >
                        </br>
                        </br>
                        </br>
                        <h1  data-aos="fade-up" data-aos-delay="100" style="font-weight: 600; font-size: 25px; text-align: center;">Ampliar sua marca nunca foi tão fácil!</h1>
                        <p class="mb-4"  data-aos="fade-up" data-aos-delay="200" style="text-align: center; font-size:15px">A vida é um conjunto de ciclos, cabe a nós nos adaptarmos e prepararmos para tais. Venha fazer parte do nosso time, e juntos, realizaremos grandes conquistas. Automatize suas vendas, acompanha de perto seus resultados, faça um upgrade e comece uma nova etapa  da melhor forma. </p>
                      </div>
                      
                      <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="500">
                        <form action="control/cadastro2.php" method="post" class="form-box row">
                          <br>
                          
                          <h3 class="h4 mb-4" style="font-size: 25px; text-align: center; font-weight: 600; color: white; ">Junte-se a nós! </h3>
                          <?php
                          if(isset($_SESSION['status_cadastro2'])):
                          ?>
                          <div class="msg" style="text-align: center;">
                            <p>Cadastrado com sucesso!</p>
                          </div>
                          <?php
                          endif;
                          unset($_SESSION['status_cadastro2']);?>
                          
                          <?php
                          if(isset($_SESSION['email_existe2'])):
                          ?>
                          <div style="text-align: center;">
                            <p>ERRO: Email já cadastrado.</p>
                          </div>
                          <?php
                          endif;
                          unset($_SESSION['email_existe2']);?>

                          <?php
                          if(isset($_SESSION['telefone_existe2'])):
                          ?>
                          <div style="text-align: center;">
                            <p>ERRO: Telefone já cadastrado.</p>
                          </div>
                          <?php
                          endif;
                          unset($_SESSION['telefone_existe2']);?>
                          <div class="form-group col-12 justify-content-center" style="text-align:center;">
                            <input name="nome" style=" text-transform: capitalize;" type="text" class="form-control col-5" placeholder="Nome">
                            <input name="sobrenome"  style=" text-transform: capitalize;" type="text" class="form-control col-5" placeholder="Sobrenome">
                          </div>
                          <div class="form-group col-12 justify-content-center" style="text-align:center;">
                            <input name="email" type="email" class="form-control col-5" placeholder="Email">
                            <input id="telefone" name="telefone" type="text" class="form-control col-5" placeholder="Telefone">
                          </div>
                          <div class="form-group col-12 justify-content-center" style="text-align:center;">
                            <input name="senha" type="password" class="form-control col-5" placeholder="Senha">
                            <input name="confirma_senha" type="password" class="form-control col-5" placeholder="Confirme a senha">
                          </div>
                          <div class="row form-group justify-content-center align-items-center">
                            <input class="col-1" type="checkbox" id="concordo" class="form-control" style="height: 15px; padding: 0px; margin:-20px -20px 0px 0px" required>
                            <label class="col-9" style="font-size: 13px; padding-top:10px">Eu aceito e concordo com os <a href="pag/termos-de-uso.php">Termos de Uso & Política de Privacidade.</a></label> 
                          </div>
                          <div style="color: black; display: block; text-align: center;"  class="form-group">
                            <button type="submit" class="btn" id="btncadastrar" onClick="validarSenha()">Cadastrar</button>
                          </div>
                          <a href="login.php" style="color: white; display: block; text-align: center;">Já tem login?<strong> Entre aqui</strong></a>
                          </br>
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
            <div class="slide-1" style="background-image: url('images/FUNDO.jpg');" data-stellar-background-ratio="0.5" alt="Second Slide">
              <div class="container">
                <div class="row align-items-center" >
                  <div class="col-12">
                    <div class="row justify-content-center">
                      <div class="col-lg-3 mb-12 justify-content-center" >
                        <h1  data-aos="fade-up" data-aos-delay="100" style="font-weight: 600; font-size: 25px; text-align: center;">Ampliar sua marca nunca foi tão fácil!</h1>
                      </br>
                        <p class="mb-4"  data-aos="fade-up" data-aos-delay="200" style="text-align: center;">A vida é um conjunto de ciclos, cabe a nós nos adaptarmos e prepararmos para tais. Venha fazer parte do nosso time, e juntos, realizaremos grandes conquistas. Automatize suas vendas, acompanha de perto seus resultados, faça um upgrade e comece uma nova etapa  da melhor forma. </p>
                      </div>

                      <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                        <form action="cadastrar.php" method="post" class="form-box">
                          </br>
                          <h3 class="h4 mb-4" style="font-size: 25px; text-align: center; font-weight: 600; color: white; ">Junte-se a nós! </h3>
                          </br>
                          <div class="form-group">
                            <input name="nome" type="text" class="form-control" placeholder="Nome">
                          </div>
                          <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                          </div>
                          <div class="form-group mb-4">
                            <input name="senha2" type="password" class="form-control" placeholder="Repita a senha">
                          </div>
                          <div style="color: black; display: block; text-align: center;"  class="form-group">
                            <button type="button" class="btn" id="btncadastrar">Cadastrar-se</button>
                          </div>
                          <div>
                            <a href="login.php" style="color: black; display: block; text-align: center; ">Já tem login?<strong> Entre aqui</strong></a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slide-1" style="background-image: url('images/FUNDO.jpg');" data-stellar-background-ratio="0.5" alt="Third Slide">
              <div class="container">
                <div class="row" >
                  <div class="col-12">
                    <div class="row justify-content-center">
                      <div class="col-lg-3 mb-12 justify-content-center" >
                        <h1  data-aos="fade-up" data-aos-delay="100" style="font-weight: 600; font-size: 25px; text-align: center;">Ampliar sua marca nunca foi tão fácil!</h1>
                        </br>
                        <p class="mb-4"  data-aos="fade-up" data-aos-delay="200" style="text-align: center;">A vida é um conjunto de ciclos, cabe a nós nos adaptarmos e prepararmos para tais. Venha fazer parte do nosso time, e juntos, realizaremos grandes conquistas. Automatize suas vendas, acompanha de perto seus resultados, faça um upgrade e comece uma nova etapa  da melhor forma. </p>
                      </div>

                      <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                        <form action="cadastrar.php" method="post" class="form-box">
                          <h3 class="h4 mb-4" style="font-size: 25px; text-align: center; font-weight: 600; color: white; ">Junte-se a nós! </h3>
                          </br>
                          <div class="form-group">
                            <input name="nome" type="text" class="form-control" placeholder="Nome">
                          </div>
                          <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                          </div>
                          <div class="form-group mb-4">
                            <input name="senha2" type="password" class="form-control" placeholder="Repita a senha">
                          </div>
                          <div style="color: black; display: block; text-align: center;"  class="form-group">
                            <button type="button" class="btn" id="btncadastrar">Cadastrar-se</button>
                          </div>
                          <div>
                            <a href="login.php" style="color: black; display: block; text-align: center; ">Já tem login?<strong> Entre aqui</strong></a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="container">                      
      <div class="site-section" id="servicos">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-9 text-center"  data-aos="fade-up" data-aos-delay="">
              <h4 class="section-title" style="color: black;">O que fazemos?</h4>           
              <p style="text-align: center;">Desenvolvemos e criamos sites e sistemas web, sempre visando a elegância e funcionabilidade. Atendemos vários âmbitos e nossos produtos são feitos sob encomendas, de acordo com a necessidade e realidade do cliente. </p>
            </div>
          </div>
          <div class="row mb-5 align-items-center" style="text-align: center; padding: 0px 20px;">
            <div class="col-lg-5 mb-5" data-aos="fade-up" data-aos-delay="100">
              <img src="images/1.jpg" alt="Image" class="img-fluid" style="width: 400px;">
            </div>
            <div class="col-lg-6 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" style="margin: 0px 50px 0px 20px;">
              <h2 class="text-black mb-4" style="text-align: right;"><b>Sites disponíveis</b></h2>
              <p class="mb-8" style="text-align: right;">De uma loja online até o infinito. Criamos e produzimos de acordo com sua ideia ou referência. Entre as ideias mais populares, são elas: plataforma de vendas, plataforma de cursos, portfólio, sites empresarias e diversas outras. </p>
              <p data-aos="fade-up" data-aos-delay="300" style="text-align: right; padding-top: 25px;"><a href="#sites" class="py-2 px-3" id="btnsaiba" >Acessar</a></p>
            </div>
          </div>

          <div class="row mb-5 align-items-center" style="text-align: center; padding: 0px 20px;">
            <div class="col-lg-5 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100" >
              <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid" style="width: 400px;">
            </div>
            <div class="col-lg-6 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" style="text-align: left;">
              <h2 class="text-black mb-4" style="text-align: left;"><b>Sistemas</b></h2>
              <p class="mb-8" style="text-align: left;">Sistemas pessoais ou empresariais, para cadastros, faturamento, dashboard, logins e usuários, restaurante e diversos outros projetos a sua disposição. </p>
              <p data-aos="fade-up" data-aos-delay="300" style="padding-top: 25px;"><a href="#sistemas" class="py-2 px-3" id="btnsaiba">Acessar</a></p>
            </div>
          </div>
        
          <div class="row mb-5 align-items-center" style="text-align: center; padding: 0px 20px;">
            <div class="col-lg-5 mb-5" data-aos="fade-up" data-aos-delay="100" style="width: 400px;">
              <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-6 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" style="margin: 0px 50px 0px 20px; text-align: left;">
              <h2 class="text-black mb-4" style="text-align: right;"><b>Marketing</b></h2>
              <p class="mb-4" style="text-align: right;">Emails com sua marca, serviços de SMTP, automatização, pop-up, personalização e consultoria para marketing digital, incluindo Facebook, Instagram e Google Ads</p>
              <p data-aos="fade-up" data-aos-delay="300" style="text-align: right; padding-top: 25px;"><a href="pag/marketing.php" class="py-2 px-3" id="btnsaiba">Acessar</a></p>
            </div>  
          </div>
        </div>
      </div>
      <div id="produtos"></div>
      <div class="site-section courses-title" id="sites" style="background-color: white;">
        <div class="container">
          <div class="row mb-8 justify-content-center">
            <div class="col-lg-10 text-center" data-aos="fade-up" data-aos-delay="">
              <h4 class="section-title" style="color: black;">Sites Disponíveis</h4>
              <p style="text-align: center;">Desenvolvemos e criamos sites e sistemas web, sempre visando a elegância e funcionabilidade. Atendemos vários âmbitos e nossos produtos são feitos sob encomendas, de acordo com a necessidade e realidade do cliente.</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100" >
        <div class="container" style="text-align: center;">
          <div class="row mb-8 justify-content-center" style="padding-top: 80px;">
            <div class="course col-lg-4 col-md-4">
              <figure class="">
                <a href="pag/html-e-css.php"><img src="images/html.png" alt="Image" class="img-fluid" style="width: 250px"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/html-e-css.php">HTML/CSS</a></h3>
                <p>Tenha um site através da super junção HTML/CSS e alguns framework's.</p>
              </div>           
            </div>

            <div class="course col-lg-4 col-md-4">
              <figure>
                <a href="pag/wordpress.php"><img src="images/wordpress.png" alt="Image" class="img-fluid" style="width: 250px"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/wordpress.php">WORDPRESS</a></h3>
                <p>A modernidade e facilidade em suas mãos, sem a necessidade de conhecimento.</p>
              </div>         
            </div>

            <div class="course col-lg-4 col-md-4">
              <figure >
                <a href="pag/responsivos.php"><img src="images/responsivo.png" alt="Image" class="img-fluid" style="width: 250px"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/responsivos.php">RESPONSIVOS</a></h3>
                <p>Acessibilidade por qualquer despositivo, sem oscilação da qualidade. </p>
              </div>
            </div>

            <div class="course col-lg-4 col-md-4">
              <figure>
                <a href="pag/e-commerce.php"><img src="images/ecommerce.png" alt="Image" class="img-fluid" style="width: 250px"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/e-commerce.php">E-COMMERCE</a></h3>
                <p>Amplie suas vendas entrando no mercado digital. Fácil e sem burocracia. </p>
              </div>
            </div>

            <div class="course col-lg-4 col-md-4">
              <figure>
                <a href="pag/plataforma-de-ead.php"><img src="images/ead.png" alt="Image" class="img-fluid" style="width: 250px"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/plataforma-de-ead.php">EAD/CURSOS ONLINE</a></h3>
                <p>Sua plataforma de cursos, totalmente independente e segura, oferecendo maior controle. </p>
              </div>
            </div>

            <div class="course col-lg-4 col-md-4">
              <figure>
                <a href="pag/portfolio.php"><img src="images/portfolio.png" alt="Image" class="img-fluid" style="width: 250px"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/portfolio.php">PORTFÓLIO</a></h3>
                <p> Traga seu portofólio ou de sua empresa para o mercado web, deixando sua identidade. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section courses-title" id="sistemas" style="background-color: white;">
        <div class="container">
          <div class="row mb-8 justify-content-center">
            <div class="col-lg-10 text-center" data-aos="fade-up" data-aos-delay="">
              <h4 class="section-title" style="color: black;">Sistemas Disponíveis</h4>
              <p style="text-align: center;">Sistemas web a pronta entrega. Tenha controle, informações e automatização de seus processos. Sistemas de login/cadastro, dashboard, aplicação de notas e formulários, painel admin, dados analíticos, e diversos outros.</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100" >
        <div class="container" style="text-align: center;">
          <div class="row mb-8 justify-content-center" style="padding-top: 80px;">

            <div class="course col-lg-4 col-md-4">
              <figure>
                <a href="pag/dashboard.php"><img src="images/dashboard.png" alt="Image" class="img-fluid" style="width: 250px;"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/dashboard.php">Dashboard</a></h3>
                <p>Tenha a opção de abranger todos seus clientes, oferecendo serviços digitais. </p>
              </div>             
            </div>
    
            <div class="course col-lg-4 col-md-4">
              <figure>
                <a href="pag/compras-online.php"><img src="images/compras.png" alt="Image" class="img-fluid" style="width: 250px;"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/compras-online.php">Compras Online</a></h3>
                <p>Tenha a opção de abranger todos seus clientes, oferecendo serviços digitais. </p>
              </div>             
            </div>

            <div class="course col-lg-4 col-md-4">
              <figure >
                <a href="pag/painel-administrativo.php"><img src="images/painel.png" alt="Image" class="img-fluid" style="width: 250px;"su></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/painel-administrativo.php">Painel Administativo</a></h3>
                <p>Uma área específica para sua administração, contendo diversas opções e finalidades</p>
              </div>
            </div>

            <div class="course col-lg-3 col-md-4">
              <figure>
                <a href="pag/login-e-cadastro.php"><img src="images/login.png" alt="Image" class="img-fluid" style="width: 250px;"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="pag/login-e-cadastro.php">Login e Cadastro</a></h3>
                <p>Determine e classifique todos aqueles que acompanham seu site ou serviços. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section pb-0" id="sobrenos">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-9 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
              <h4 class="section-title">Sobre nós</h4>
              <p class="mb-7">Localizado em Passos-MG, a equipe <a href="https://www.webpassos.com.br" target="_blank"><span><strong>WEBPASSOS</strong></span> desenvolve projetos visando o mercado web. Trabalhamos em diversas finalidades, do back-end ao front, nos adaptando para cada cliente e usuário. Caso tenha interesse sobre saber mais ou entrar em contato, nos acompenhe pelas redes sociais.</a></p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-0 col-lg-4"></div>
            <div class="col-md-3 col-lg-4" data-aos="fade-up" data-aos-delay="200" id="profissional">
              <div class="teacher">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                <div class="py-2">
                  <h3 class="text-black">Katleen Stone</h3>
                  <p class="position">Physics Teacher</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                </div>
              </div>
            </div>
            <div class="col-md-0 col-lg-4"></div>
          </div>
        </div>
      </div>

      <div class="site-section pb-0">
        <div class="container">
          <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
            <div class="col-lg-7 text-center">
             <h4 class="section-title">Por que nossos serviços?</h4>
            </div>
          </div>
          <div class="row align-items-center" style="display: flex; padding-top: -100px;">
            <div class="col-lg-6 ml-auto justify-content-center"  data-aos="fade-up" data-aos-delay="100">
              <div class="bg-white why-choose-us-box">
                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon   icon-legal"></span></span></div>
                  <div><h3 class="m-0" style="font-size: 16px;">Oferecemos garantia e estabilidade em todos nossos produtos e serviços.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-security"></span></span></div>
                  <div><h3 class="m-0" style="font-size: 16px;">Ética e segurança são nossa prioridade para quaisquer situações.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-print"></span></span></div>
                  <div><h3 class="m-0" style="font-size: 16px;">Notas fiscais em todos os produtos, oferecendo melhor garantia e segurança.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-server"></span></span></div>
                  <div><h3 class="m-0" style="font-size: 16px;">Servidores de exímia qualidade e infraestrutura - Locaweb.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-pencil"></span></span></div>
                  <div><h3 class="m-0" style="font-size: 16px;">Personalização e desenvolvimento para pequenos, medios ou grandes projetos.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-users"></span></span></div>
                  <div><h3 class="m-0" style="font-size: 16px;">Todos nossos serviços será de sua propriedade, tendo controle e administração.</h3></div>
                </div>
              </div>
            </div>
            <div class="col-lg-5"  data-aos="fade-left" data-aos-delay="200" style="text-align: center;">
              <img src="images/person_transparent.png" alt="Image" style="width: 420px;">
            </div>
          </div>
        </div>
      </div>

      <div class="site-section bg-light" id="contato">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h4 class="section-title mb-3" style="text-align: center;">Contato</h4>
              <p class="mb-5" style="text-align: center;">Caso haja interesse ou sujestão, entre em contato conosco. </p> 
              <form method="post" data-aos="fade" action="control/mail.php">
                <div class="form-group row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                    <input name="nome" style=" text-transform: capitalize;" type="text" class="form-control" placeholder="Nome" required>
                  </div>
                  <div class="col-md-6">
                    <input name="sobrenome" style=" text-transform: capitalize;" type="text" class="form-control" placeholder="Sobrenome" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="col-md-6">
                    <input id="telefone2" name="telefone" type="text" class="form-control" placeholder="Telefone">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <textarea name="mensagem" class="form-control" rows="3" placeholder="Escreva sua mensagem!" required></textarea>
                  </div>
                </div>
                <div class="form-group row" style="text-align: center;">
                  <div class="col-md-12">
                    <input type="submit" class="btn" value="Enviar" style="text-align: center;">
                  </div>
                </div>
              </form>
              
              <div>
                <h4 class="mb-5" style="text-align: center; padding-top: 30px; font-size: 22px;">Outros meios de comunicação.</h4>
              </div>
              <div class="row mb-8 justify-content-center" style="text-align: center;" id="redessociais">
                <div class="col-3" style="padding-top: 20px;">
                  <a href="https://api.whatsapp.com/send?phone=5535992711145&text=Ol%C3%A1%2C%20gostaria%20de%20entrar%20em%20contato%20com%20voces!" style="text-align: center; font-size: 18px; display: inline-block;" target="blank;" rel="noopener noreferrer;"><img src="images/png/011-whatsapp.png" alt="Image" style="width: 30px; height: 30px;" id="images">WHATSAPP</a>
                </div>
                <div class="col-3" style="padding-top: 20px;">
                  <a href="https://www.instagram.com/webpassos_/" style="text-align: center; font-size: 18px; display: inline-block;" target="blank;" rel="noopener noreferrer;"><img src="images/png/048-instagram.png" alt="Image" style="width: 30px; height: 30px;" id="images">INSTAGRAM</a>
                </div>
                <div class="col-3" style="padding-top: 20px;">
                  <a href="https://www.facebook.com/webpassos.sistemas" style="text-align: center; font-size: 18px; display: inline-block;" target="blank;" rel="noopener noreferrer;"><img src="images/png/001-facebook.png" alt="Image" style="width: 30px; height: 30px;" id="images"><br>FACEBOOK</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIM do contaudo principal. -->

    <?php require_once "partes/footer_principal.php"?>
    <div class="col-3" style="padding-top: 20px;">
                  <a href="https://www.facebook.com/webpassos.sistemas" style="text-align: center; font-size: 18px; display: inline-block;" target="blank;" rel="noopener noreferrer;"><img src="images/png/001-facebook.png" alt="Image" style="width: 30px; height: 30px;" id="images">FACEBOOK</a>
                </div>