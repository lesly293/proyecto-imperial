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
          <li class="menu-active"><a href="agregarprov.php">Agregar Proveedor</a></li>
          <li class="menu-active"><a href="eliminarprov.php">Eliminar Proveedor</a></li>
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

    echo "-----> ".$_SESSION["usr"];
    echo "<br>";
    echo "  Tu Id es ".$_SESSION["id_cliente"];
    ?>
  </div>

<br>
<h3 align=" center"> Ventas Realizadas  </h3>
<br>  
<div >
<table style="width:60%" align="center"  >
  <tr>
    <th align="center"> Código Producto </th>
    <th align="center"> Marca </th>
    <th align="center"> Fecha </th>
    <th align="center"> Cantidad </th>
    <th align="center"> Total Venta </th>
  </tr>

  <?php
    include 'datosconexion.php';
    $conexion=mysqli_connect($db_server, $db_user, $db_pass, $db_name); 
    $consulta = "select producto.num_serie, producto.marca,
    compra.fecha, compra.cantidad,compra.total_pago from compra, producto where compra.id_producto=producto.id_producto";
    $resultado=mysqli_query($conexion, $consulta);
    while ($datos=mysqli_fetch_row($resultado))
    {
  ?>
  <tr>
    <td align="center"> <?php echo $datos[0]?> </td>
    <td align="center"> <?php echo $datos[1]?> </td>
    <td align="center"> <?php echo $datos[2]?> </td>
    <td align="center"> <?php echo $datos[3]?> </td>
    <td align="center"> $ <?php echo $datos[4]?> </td>
  </tr>

  <?php 
    }
  ?>
  <tr>
    <?php
    $consulta2 = "select sum(total_pago) from compra";
    $resultado2=mysqli_query($conexion, $consulta2);
    $datos2=mysqli_fetch_row($resultado2);
    ?>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td bgcolor="lightskyblue">Total : $ <?php echo $datos2[0]?> </td>
  </tr>

  <?php
  mysqli_close($conexion);
  ?>


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
