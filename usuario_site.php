<!DOCTYPE html>
<html>
<head>
	<title>Compras</title>
</head>
<body bgcolor="pink">

<?php
session_start();

echo "Bienvenido Usuario ".$_SESSION["usr"];

echo "  Tu Id es ".$_SESSION["id_cliente"];
?>

<br>
<div align="center" class="table-responsive">
	<table>
		
		<tr align="center">
			<th colspan="3" align="center">Nuestros Productos</th>
		</tr>
		<tr>
			<td align="center">
				<img src="portfolio/app1.jpg" width="200" height="200">
			</td>
			<td align="center">
				<img src="portfolio/app2.jpg" width="200" height="200">
			</td>
			<td align="center">
				<img src="portfolio/app3.jpg" width="200" height="200">
			</td>
			<td align="center">
				<img src="portfolio/logo1.jpg" width="200" height="200">
			</td>
			<td align="center">
				<img src="portfolio/logo2.jpg" width="200" height="200">
			</td>
			<td align="center">
				<img src="portfolio/logo3.jpg" width="200" height="200">
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
<form action="actcompras.php" method="post">
	<div align="center">
	<label for="">NUMERO DE SERIE:</label>
	<input type="text" name="serie">
	</div>
	<div align="center">
	<label for="">MARCA:</label>
	<input type="text" name="marca">
	</div>
	<div align="center">
	<label for="">CANTIDAD A COMPRAR:</label>
	<input type="text" name="cantidad">
	</div>
	<div align="center">
	<button type="submit">Comprar</button>
	</div>
</form>

	</table>

</body>
</html>