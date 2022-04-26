<?php
	 
    require './mensajes.php';

?>
<!DOCTYPE html>
	<html lang="es">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Sistema</title>
		<link rel="stylesheet" href="assets/css/Style2.css">
	</head>
<body background="assets/img/3.png">
	<h3>ㅤㅤ</h3>
	<center>
<div id="Formulario2">
	<br></br>
	<img src="assets/img/2.png">
<h4><div id="Formulario1">Ingresar Codigo del Producto</div></h4>
<form action="./guardar_producto.php" method="GET">
<p>
		<center>
			<input type="text"  name="numero" id="numero" size="10" maxlength="10" placeholder="Numero Reporte" required />
			<input type="text"  name="codigo" id="codigo" size="10" maxlength="10" placeholder="Código" required />
			<input type="text"  name="unidades" id="unidades" size="5" maxlength="5" placeholder="Unidades" />
			<input type="text"  name="costo" id="costo" size="10" maxlength="10" placeholder="Costo unitario en $"  />
			<input type="text"  name="dolar" id="dolar" size="10" maxlength="10" placeholder="Dolar promedio"  />
			<input type="text"  name="flete" id="flete" size="10" maxlength="10" placeholder="Precio Flete"  />
<br>
</br>
<br>
</br>
			<input type="submit" name="Listo" value="Listo">
		</form>
		<form action="Tc2.php">
      <input type="submit" value="Agregar otro Producto">
		</p>
		</div>
	</center>
</form>


<br>
<center>
    
    <?= isset( $_GET['message'] ) ? ( lanzar_mensaje( $_GET['message'] ) ) : ( "" )?>

	</form>
	</body>
	</html>
