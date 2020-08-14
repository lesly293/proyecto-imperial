<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Fragancias Imperial</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
<div id="preloader"></div>
  <!--==========================
  Hero Section
  ============================-->


  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
<li class="menu-active"><a href="cerrar.php">Cerrar Sesión</a></li>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <div class="col-md-12">
    <br>
    <br>
    <h3 class="section-title">BIENVENIDO</h3>
       <div class="section-title-divider"></div>

    <?php
    session_start();

    echo "----> ".$_SESSION["usr"];
    echo "<br>";
    echo "  Tu Id es ".$_SESSION["id_cliente"];
    ?>
 
    <p class="section-description">Comienza el día con la Mejor Fragancia...</p>
  </div>

<div>
<br>
<div align="center" >
  <table>    
    <tr align="center">
      
    </tr>
    <tr>
      <td align="center">
        <img src="img/portfolio-1.jpg" width="230" height="200">
      </td>
      <td align="center">
        <img src="img/portfolio-2.jpg" width="230" height="200">
      </td>
      <td align="center">
        <img src="img/portfolio-3.jpg" width="230" height="200">
      </td>
    </tr>

    <tr>
      <td align="center">
        <a href="#">MAGNETIC--EZE001</a>
      </td>
      <td align="center">
        <a href="#">SPARKLING--EZE002</a>
      </td>
      <td align="center">
        <a href="#">NATURAL--EZE003</a>
      </td>
    </tr>
    <tr>
      
      <td align="center">
        <img src="img/portfolio-4.jpg" width="230" height="200">
      </td>
      <td align="center">
        <img src="img/portfolio-5.jpg" width="230" height="200">
      </td>
      <td align="center">
        <img src="img/portfolio-6.jpg" width="230" height="200">
      </td>
    </tr>
    <tr>
      
      <td align="center">
        <a href="#">BOMBSHELL--EZE004</a>
      </td>
      <td align="center">
        <a href="#">INTENSE--EZE005</a>
      </td>
      <td align="center">
        <a href="#">CRUSH--EZE006</a>
      </td>
    </tr>
    </div>

  <!-- #header -->


  <!--==========================
  Contact Section
  ============================-->
<form action="actcompras.php" method="post" target="_blank" role="form" class="contactForm">
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row"></div>

      <div class="row">
        <div class="col-md-5 col-md-push-2">
          <div class="form">                 
            <div id="errormessage"></div>
             <div class="form-group">
                <input type="text" name="serie" class="form-control" id="serie" placeholder="NUMERO DE SERIE" /> 
              </div>

              <div class="form-group">
                <input type="text" name="marca" class="form-control" id="marca" placeholder="MARCA" /> 
              </div>

              <div class="form-group">
                <input type="text" name="cantidad" class="form-control" id="cantidad" placeholder="CANTIDAD DE PRODUCTOS" /> 
              </div>
              <div class="text-center"><button type="submit">Comprar</button></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
