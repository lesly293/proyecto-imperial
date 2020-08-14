<!DOCTYPE html>
<html>
<head>
	<title> IMPERIAL </title>
</head>
<body>
<?php


$usuario=$_POST["usuario"];
$pass=$_POST["pass"];



include 'datosconexion.php';
$conexion= mysqli_connect($db_server, $db_user, $db_pass, $db_name);

$consulta="select usuario,pass,tipo_usuario,id_cliente from usuario, cliente where 
usuario='$usuario' and pass='$pass' and usuario.id_usuario=cliente.id_usuario";

$resultado=mysqli_query($conexion, $consulta);
$rows=mysqli_affected_rows($conexion);
$datos=mysqli_fetch_row($resultado);

sleep(1);

if ($resultado == true and $rows==1)
{
session_start();
$_SESSION["usr"]=$_POST["usuario"];
$_SESSION["id_cliente"]=$datos[3];

	if ($datos[2]==1) 
	{
		echo '<script language="javascript">
		alert ("Bienvenido Usuario");
		window.location.href="../Imperial/usuario.php";
						</script>';
	}
	else
	{
		echo '<script language="javascript">
		alert ("Bienvenido Administrador");
		window.location.href="../Imperial/admin.php";
						</script>';
	}

}
else
{
	echo '<script language="javascript">
		alert ("Usuario NO Registrado");
		window.location.href="../Imperial/index.html";
						</script>';
}
mysqli_close($conexion);


?>
</body>
</html>