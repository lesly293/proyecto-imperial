
<!DOCTYPE html>
<html>
<head>
	<title>Admin site</title>
</head>
<body bgcolor="pink">

<?php
session_start();

echo "Bienvenido Usuario ".$_SESSION["usr"];

echo "  Tu Id es ".$_SESSION["id_cliente"];
?>
<br>
<h3 align="	center"> Ventas Realizadas	</h3>
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

	</body>
</html>