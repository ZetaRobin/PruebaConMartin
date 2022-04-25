<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title></title>
	</head>





<?php
// 1 es agrgar 2 eliminar 3 modificar
	$accion = $_GET['ac'];
	$id = $_POST['id'];
  $cod= $_POST['codigo'];
	$des= $_POST['descripcion'];
	$col= $_POST['color'];
	$med= $_POST['medidas'];
	$uni= $_POST['unidades'];
	$cos= $_POST['costo'];
	$tol= $_POST['total'];
	$conexion = mysqli_connect("localhost","root","","sistema");

	if($accion) {
			$consulta = "INSERT INTO productos VALUES ('$id','$cod','$des','$col','$med','$uni','$cos','$tol')";
			mysqli_query($conexion,$consulta);
			header('Location:/Sistema/ver.php');
 }
?>

	<body background="img/Fondo.jpg">

<p><center><div id="text">La accion fue ejecutada exitosamente</div></center></p>
 <center>
	 <form action="index.php">
		 <input type="submit" value="Volver">
	 </form>
 </center>
 <style>


            body {
                background-color: #6F87B0;
                color: black;
                font-size: 1.5em;
            }
            h1 {
                color: black;
            }


        </style>
        </body>
				</html>
