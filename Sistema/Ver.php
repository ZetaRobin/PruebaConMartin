<?php
$conexion = mysqli_connect("localhost","root","","sistema");
$conexion -> set_charset("utf8");
$id= $_GET['id'];
$m = "SELECT * FROM productos WHERE id = '$id'";
$modificar= $conexion->query($m);
$dato= $modificar->fetch_array();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Agregar</title>
	<link rel="stylesheet" href="assets/Style2.css">
</head>
<body background="assets/img/3.png">
	<br></br>
  <center>
  <div class="bordered">
	<center><img widht="270px" height="120px" alt="Procuraduria" src="img/Procuraduria.png"/>
	<h1>Datos detallados</h1></center>
<table>
  <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <tr>
    <td>
     <ul>
      <li>Nac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['nacionalidad']; ?></li>
<br>
      <li>Cedula&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['cedula']; ?></li>
<br>
    <li>Apellidos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['apellidos']; ?></li>
<br>
  <li>Nombres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['nombres']; ?></li>
<br>
      <li>Genero&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['genero']; ?></li>
<br>
      <li>Estado civil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['estado']; ?></li>
<br>
      <li>Fecha de nacimiento&nbsp;&nbsp;&nbsp;<?php echo $dato['fecha']; ?></li>
<br>
      <li>Telefono&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['telefono']; ?></li>
<br>
      <li>Movil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['movil']; ?></li>
<br>
      <li>Municipio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['municipio']; ?></li>
<br>
      <li>Parroquia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['parroquia']; ?></li>
<br>
      <li>Direccion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['direccion']; ?></li>
<br>
      <li>Tipo de pension&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['tipo']; ?></li>
<br>
      <li>Organismo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['organismo']; ?></li>
<br>
      <li>Tipo de cuenta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['tipo_cuenta']; ?></li>
<br>
      <li>Numero de cuenta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['numero']; ?></li>
<br>
      <li>Carpeta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dato['carpeta']; ?></li>
</ul>
</td>
</tr>
</form>
</table>
</div>
</center>
</form>
<br>
<form action="lista.php">
<input type="submit" name="Volver" value="Volver">
</form>
</body>
<style>
.bordered {
width: 750px;
height: 900px;
padding: 5px;
border: 3px solid #1D438A;
border-radius: 10px;
background-color: white;
}
</html>
