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
			<input type="text"  name="numero" id="numero" size="10" maxlength="10" placeholder="Numero Reporte" required />
			<input type="text"  name="codigo" id="codigo" size="10" maxlength="10" placeholder="Código" required />
			<input type="text"  name="unidades" id="unidades" size="5" maxlength="5" placeholder="Unidades"  required />
			<input type="text"  name="costo" id="costo" size="10" maxlength="10" placeholder="Costo unitario en $"   required />
			<input type="text"  name="dolar" id="dolar" size="10" maxlength="10" placeholder="Dolar promedio"   required />
			<input type="text"  name="flete" id="flete" size="10" maxlength="10" placeholder="Precio Flete" />
<br>
<h4><div id="Formulario1">Fechas del reporte</div></h4>
<input type="date" name="del" id="del" placeholder="dd/mm/aaaa" required />
&nbsp;
Al
&nbsp;
<input type="date" name="al" id="al" placeholder="dd/mm/aaaa" required />
<br>
<h4><div id="Formulario1">Corresponde a la</div></h4>
<select name="fnc" placeholder="Factura/Ne" id="cons" required />
	<option value="Factura Nº">Factura</option>
	<option value="NE Nº">Nota de Entrega</option>
	<option value="Consignacion al">Consignacion al </option>
</select>
<input type="charset" name="ne" id="n" placeholder="N°"  />
<input type="date" name="n" id="n" placeholder="dd/mm/aaaa"  />
</br>
<br>
<br>
<input type="submit" name="Listo" value="Listo">
		</form>
		<form action="Tc2.php">
      <input type="submit" value="Agregar otro Producto">
		</p>
		</div>
	</center>
</form>

</table>
</center>
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
     height: 700px;
     padding: 5px;
     border: 4px solid #0055BD;
     background-color: white;
		 border-radius: 10px;
 }


 input[type="date"] {
	 outline: none;
	 padding: 10px;
	 display: inline;
	 width: 115px;
	 height: 15px;
	 border: 2px solid #gray;
	 margin: 0px auto;
	 font-size: 1.2em;

 }
 select{
	 outline: none;
	 padding: 10px;
	 display: inline-block;
	 width: 140px;
	 height: 39px;
	 border: 2px solid #gray;
	 margin: 0px auto;
	 font-size: 0.8em;
 }
 input[type="charset"]{
	 outline: none;
	 padding: 10px;
	 display: inline;
	 width: 70px;
	 height: 15px;
	 border: 2px solid #gray;
	 margin: 0px auto;
	 font-size: 0.8em;
 }
</style>

	</form>
	</body>
	</html>
