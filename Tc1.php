<?php
	 $conexion = mysqli_connect("localhost","root","","sistema");
	 $conexion -> set_charset("utf8");
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
<form action="2.php" method="GET">
<p>
		<center>
  <input type="text" name="codigo" placeholder="Codigo del Producto" required/>
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
<?php
if(isset($_GET['Listo'])) {
	 $busqueda = $_GET['codigo'];
	 $registro = mysqli_query($conexion,"SELECT * from productos");
	while ($result=mysqli_fetch_array($registro))
	 $consulta = $conexion->query("SELECT * FROM productos WHERE codigo LIKE '%$busqueda%'");
	 while ($row = $consulta->fetch_array()){

?>
<center>
<table  border="1" background-color="blue" bgcolor="black">
	<ul>
<tr bgcolor="#1D438A">
		<td>
		<li>Codigoㅤ</li>
	 </td>
		<td>
			<li>Descripcionㅤㅤ</li>
		</td>
		 <td>
			<li>Colorㅤㅤㅤㅤㅤㅤㅤ</li>
		</td>
		<td>
			<li>Medidaㅤㅤㅤㅤㅤㅤㅤㅤ</li>
		</td>
</tr>

<tr bgcolor="white">
<td>
	<li><?php echo $row['codigo']?></li>
</td>
<td>
	<li><?php echo $row['descripcion']?></li>
</td>
<td>
	<li><?php echo $row['color']?></li>
</td>
<td>
	<li><?php echo $row['medida']?></li>
</td>
</tr>
</ul>
</table>
<?php
	 }

}
 ?>
</table></center>
<br>
<center>

 <style>
            body {
                background-color: white;
                color: black;
                font-size: 1em;
            }
            h1 {
                color: black;
            }
						#Formulario1{

						}
	#Formulario2{
     width: 600px;
     height: 450px;
     padding: 5px;
     border: 4px solid #0055BD;
     background-color: white;
		 border-radius: 10px;
 }



</style>

	</form>
	</body>
	</html>
