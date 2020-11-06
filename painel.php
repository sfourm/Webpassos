<?php
include('control/verifica_login.php');
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
    <link rel="shortcut icon" type="imagem/x-icon" href="images/icone.png"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/social midia/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/aos.js"></script>
  </head>
    <body>
        <div class="container" style="background-image: url('images/Em-manutenção.jpg');">
            <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
            <h2><a href="control/logout.php">Sair</a></h2>
        </div>
    </body> 
</html>