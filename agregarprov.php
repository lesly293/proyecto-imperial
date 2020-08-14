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
        <li class="menu-active"><a href="admin.php">Regresar</a></li>
        <li class="menu-active"><a href="cerrar.php">Cerrar Sesión</a></li>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <div class="col-md-12">
    <br>
    <br>
    <h3 class="section-title">ALTAS DE PROVEEDOR</h3>
       <div class="section-title-divider"></div>

    <?php
    session_start();

    echo "----> ".$_SESSION["usr"];
    echo "<br>";
    echo "  Tu Id es ".$_SESSION["id_cliente"];
    ?>
  </div>

<form action="actagregar.php" method="post" target="_blank" role="form" class="contactForm">
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row"></div>

      <div class="row">
        <div class="col-md-5 col-md-push-2">
          <div class="form">                 
            <div id="errormessage"></div>
             <div class="form-group">
                <input type="text" name="rfc" class="form-control" id="rfc" placeholder=" RFC" /> 
              </div>

              <div class="form-group">
                <input type="text" name="empresa" class="form-control" id="empresa" placeholder=" EMPRESA" /> 
              </div>

              <div class="form-group">
                <input type="text" name="correo" class="form-control" id="correo" placeholder=" CORREO" /> 
              </div>

              <div class="form-group">
                <input type="text" name="direccion" class="form-control" id="direccion" placeholder=" DIRECCION" /> 
              </div>

              <div class="form-group">
                <input type="text" name="casa" class="form-control" id="casa" placeholder=" NUMERO DE CASA" /> 
              </div>

              <div class="form-group">
                <input type="text" name="cel" class="form-control" id="cel" placeholder=" CELULAR" /> 
              </div>

              <div class="text-center"><button type="submit">Agregar</button></div>
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
