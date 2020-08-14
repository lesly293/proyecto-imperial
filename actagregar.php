<!DOCTYPE html>
<html>
<head>
	<title> IMPERIAL </title>
</head>
<body>
<?php
session_start();

$rfc=$_POST["rfc"];
$empresa=$_POST["empresa"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$casa=$_POST["casa"];
$cel=$_POST["cel"];

$id_cliente=$_SESSION['id_cliente'];




/*
echo $rfc;
echo $empresa;
echo $correo;
echo $direccion;
echo $casa;
echo $cel;
*/

$salida;
include 'datosconexion.php';
$conexion= mysqli_connect($db_server, $db_user, $db_pass, $db_name);

$agregar="call sp_nuevoProveedor('$rfc','$empresa','$correo','$direccion','$casa','$cel',@salida)";

$resultado=mysqli_query($conexion, $agregar);
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
		alert ("Se Agrego Exitosamente");
		window.location.href="../Imperial/admin.php";
						</script>';
	}
	else
	{
		if ($salida==2)
		{
		echo '<script language="javascript">
			alert ("Telefono Ya Existente");
			window.location.href="../Imperial/admin.php";
							</script>';	
		}
		else
		echo '<script language="javascript">
			alert ("Proveedor Ya Existente");
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