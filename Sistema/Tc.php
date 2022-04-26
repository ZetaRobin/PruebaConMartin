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
<h4><div id="Formulario1">Ingresar datos del producto</div></h4>
	<form action="2.1.php" method="get">
<p>
		<center>
			<label for="codigo">Codigo</label>
			<input type="text"  name="p[]" id="codigo" placeholder="Codigo"/>
			<br>
			<label for="unidades">Unidades</label>
			<input type="text"  name="p[]" id="unidades" placeholder="Unidades"/>
			<br>
      <label for="costo">Co
			<input type="text"  name="p[]" id="costo" placeholder="Costo unitario en $" />

<br>
</br>
<br>
</br>
      <input type="submit" value="Guardar">
			<input type="reset" value="Limpiar">
		</p>
		</div>
	</center>


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
     height: 600px;
     padding: 5px;
     border: 4px solid #0055BD;
     background-color: white;
		 border-radius: 10px;
 }



</style>

	</form>
	</body>
	</html>
