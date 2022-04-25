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
	<form action="accioness.php?ac=1" method="post">
<p>
		<center>

			<input type="text"  name="codigo" id="codigo" size="10" maxlength="10" placeholder="Código" required />
    	<input type="text"  name="unidades" id="unidades" size="5" maxlength="5" placeholder="Unidades" />
     	<input type="text"  name="costo" id="costo" size="10" maxlength="10" placeholder="Costo unitario en $"  />
			<input type="text"  name="total" id="total" size="10" maxlength="10" placeholder="Sub-total en $"  />
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
