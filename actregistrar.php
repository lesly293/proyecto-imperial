<!DOCTYPE html>
<html>
<head>
	<title> IMPERIAL </title>
</head>
<body>
<?php


include ('datosconexion.php');
$conexion=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

$rfc=$_POST["rfc"];
$nombre=$_POST["nombre"];
$apaterno=$_POST["apaterno"];
$amaterno=$_POST["amaterno"];
$edad=$_POST["edad"];
$sexo=$_POST["sexo"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$casa=$_POST["casa"];
$cel=$_POST["cel"];
$usuario=$_POST["usuario"];
$pass=$_POST["pass"];

$agregar="call sp_nuevoCliente ('$rfc','$nombre','$apaterno','$amaterno','$edad','$sexo','$correo','$direccion','$cel','$casa','$usuario','$pass')";

$resultado = mysqli_query($conexion, $agregar);

if ($resultado==true)
{
	session_start();
	$_SESSION["usr"]=$_POST["usuario"];
	$_SESSION["id_cliente"]=$datos[3];

	echo '<script language="javascript">
	alert("Usuario Registrado");
	window.location.href="../Imperial/usuario.php";
    	         </script>';
}else{
	echo '<script language="javascript">
	alert("Intente Nuevamente");
	window.location.href="../Imperial/registrar.html";
    	         </script>';
}
mysqli_close($conexion);

 ?>

</body>
</html>
?>
</body>
</html>