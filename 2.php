
 <?php
		$conexion = mysqli_connect("localhost","root","","sistema");
		$conexion -> set_charset("utf8");
		?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<title>Reporte</title>
  <link rel="stylesheet" href="assets/css/Style3.css">
</head>
<body background="assets/img/3.png">


  <center>
    <div id="Formulario2">
      <table>
        <tr height="50px" bgcolor="white">
          <td width="260px">
            <div id="r">
          <p>Reporte de Ventas del</p>
        </div>
          </td>
          <td width="100px">
            <input type="date">
          </td>
          <td width="20px">
            <div id="r">
          <p>al</p>
        </div>
          </td>
          <td width="100px">
            <input type="date">
          </td>
          <td width="250px">
          </td>
          <td width="10px">
            <div id="r">
            N°
          </div>
          </td>
          <td>
          <input type="charset" size="4px" maxlength="4">
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="500px">
          </td>
          <td >
            <div id="s">
            Corresponde a la Consignacion al
          </div>
          </td>
          <td>
              <input type="date" id="sa">
            </div>
          </td>
        </tr>
      </table>
      <div id="a">
  	<img src="assets/img/4.png" width="1100px" height="200px">
</div>
  <table width="1100px" border="1" background-color="white" bgcolor="black">

<tr height="65px" bgcolor="white">

      <td width="80px">
        <div id="lo">
        <center>
      Codigo
      </center>
    </div>
     </td>
      <td width="260px">
        <div id="lo">
        <center>
        ㅤDescripcionㅤ
      </center>
    </div>
      </td>
      <td width="140px">
        <div id="lo">
        <center>
        ㅤColorㅤ
      </center>
    </div>
     </td>
      <td>
        <div id="lo">
        <center>
        ㅤMedidaㅤ
      </center>
    </div>
      </td>
      <td>
        <div id="los">
        <center>
        ㅤUnidadesㅤ
      </center>
    </div>
      </td>
      <td>
        <div id="lo">
        <center>
        ㅤCosto Unitario en $ㅤ
      </center>
    </div>
     </td>
      <td>
        <div id="lo">
        <center>
        ㅤSub-total en $ㅤ
      </center>
    </div>
      </td>
</div>
  </tr>
  <?php
  if(isset($_GET['Listo'])) {
     $busqueda = $_GET['codigo'];
     $registro = mysqli_query($conexion,"SELECT * from productos");
    while ($result=mysqli_fetch_array($registro))
     $consulta = $conexion->query("SELECT * FROM productos WHERE codigo LIKE '%$busqueda%'");
     while ($row = $consulta->fetch_array()){
  ?>

  <tr height="15.75" bgcolor="white">
  <td>
    <center>
		<?php echo $row['codigo']?>
</center>
  </td>
  <td>
	&nbsp;<?php echo $row['descripcion']?>
	</td>
  <td>
		&nbsp;<?php echo $row['color']?>
	</td>

  <td>
  <div id="lol">
		<?php echo $row['medida']?>
  <div>
</td>
  <td>
    <div id="lol">
    	<input type="text"  name="unidades" id="unidades" size="5" maxlength="5"/>
</div>
  </td>
  <td>
    <div id="lol">
    <input type="text"  name="costo" id="costo" size="10" maxlength="10"/>
</div>
  </td>
  <td>
    <div id="lol">
    <input type="text"  name="total" id="total" size="10" maxlength="10"/>
</div>
  </td>

</tr>


</table>
</div>
</center>
<?php
     }

}
   ?>
</table></center>
<br>
<style>
#Formulario2{
     width: 1100px;
     height: 600px;
     padding: 5px;
     border: 2px solid black;
     background-color: white;
 }

        body {
            background-color: #6F87B0;
            color: black;
            font-size: 0.8em;
        }
        h1 {
            color: black;
        }
#lol{
  text-align: right;
}
#lo{
  font-size: 1.4em;
  }
  #los{
    font-size: 1.4em;
    color: red;
    }
</style>
</body>
</html>
