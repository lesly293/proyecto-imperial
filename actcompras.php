<!DOCTYPE html>
<html>
<head>
	<title> IMPERIAL </title>
</head>
<body>
<?php
session_start();

$serie=$_POST["serie"];
$marca=$_POST["marca"];
$cantidad=$_POST["cantidad"];

$id_cliente=$_SESSION['id_cliente'];




/*
echo $serie;
echo $marca;
echo $cantidad;
echo $id_cliente;
*/
$salida;
include 'datosconexion.php';
$conexion= mysqli_connect($db_server, $db_user, $db_pass, $db_name);

$compra="call sp_nueva_compra('$serie','$marca','$cantidad','$id_cliente',@salida)";

$resultado=mysqli_query($conexion, $compra);
$datos=mysqli_fetch_row($resultado);
$error_num=mysqli_errno($conexion);
$error_desc=mysqli_error($conexion);

sleep(1);

$salida=$datos[0];

if ($resultado == true )
{
	if ($salida==2) 
	{
		echo '<script language="javascript">
		alert ("Compra Procesada Exitosamente");
		window.location.href="../Imperial/usuario.php";
						</script>';
	}
	else
	{

		if ($salida==1)
		{
			echo '<script language="javascript">
			alert ("Producto Insuficiente o no Existe en el Stock");
			window.location.href="../Imperial/usuario.php";
							</script>';
		}
		else
		{
			echo '<script language="javascript">
				alert ("Producto No Registrado");
				window.location.href="../Imperial/usuario.php";
							</script>';
		}
	}
}
else
{
		echo '<script language="javascript">
			alert ("Ha ocurrido un error' .$error_num.''.$error_desc.' "");
			window.location.href="../Imperial/usuario.php";
						</script>';
	
}
mysqli_close($conexion);


?>

</body>
</html>