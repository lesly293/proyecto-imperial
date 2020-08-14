<!DOCTYPE html>
<html>
<head>
	<title> IMPERIAL </title>
</head>
<body>
<?php
session_start();

$rfc=$_POST["rfc"];

$id_cliente=$_SESSION['id_cliente'];


/*
echo $rfc;
*/
$salida;
include 'datosconexion.php';
$conexion= mysqli_connect($db_server, $db_user, $db_pass, $db_name);

$compra="call sp_eliminarProveedor('$rfc',@salida)";

$resultado=mysqli_query($conexion, $compra);
$datos=mysqli_fetch_row($resultado);
$error_num=mysqli_errno($conexion);
$error_desc=mysqli_error($conexion);

sleep(1);

$salida=$datos[0];

if ($resultado == true )
{
	if ($salida==1) 
	{
		echo '<script language="javascript">
		alert ("Proveedor Eliminado Exitosamente");
		window.location.href="../Imperial/admin.php";
						</script>';
	}
	else
	{
		echo '<script language="javascript">
				alert ("RFC No Existe");
				window.location.href="../Imperial/admin.php";
							</script>';
	}
}
else
{
		echo '<script language="javascript">
			alert ("Ha ocurrido un error");
			window.location.href="../Imperial/admin.php";
						</script>';
	
}
mysqli_close($conexion);


?>

</body>
</html>