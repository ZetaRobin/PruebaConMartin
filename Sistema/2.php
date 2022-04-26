<pre>
 <?php

    require './buscar_productos.php';


    $uni= $_GET['unidades'];
    $cod = $_GET['codigo'];
    $cos= $_GET['costo'];
    $dol= $_GET['dolar'];

    
    
    // $tot= $uni * $cos;

    $tot = 0;
    $subs = 0;

    // $subs= $dol * $tot;
    $iva= $subs * 0.16;
    $totl= $subs + $iva;
    $subs1 = bcdiv($subs, '1', 2);
    $iva1 = bcdiv($iva, '1', 2);
    $totl1 = bcdiv($totl, '1', 2);
    $tot1 = bcdiv($tot, '1', 2);
		
    $conexion = mysqli_connect("localhost","root","","sistema");
    $conexion -> set_charset("utf8");

    $productos = buscar_productos( $cod, $uni, $cos, $conexion );




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
        <td width="125px">
          <div id="rk">
            <?php echo $_REQUEST['del'] ?>
          </div>
        </td>
        <td width="25px">
          <div id="r">
            <p>al</p>
          </div>
        </td>
        <td width="130px">
          <div id="rk">
            <?php echo $_REQUEST['al'] ?>
          </div>
        </td>
        <td width="300px">
        </td>
        <td width="10px">
          <div id="r">
            N°
          </div>
        </td>
        <td>
          <div id="r">
            <?php echo $_REQUEST['numero']?></div>
        </td>
      </tr>
    </table>
    <table>
      <tr>
        <td width="1100px">
            <div id="s">
            Corresponde a la
            <?php echo  $_REQUEST['fnc']?>
            <?php echo  $_REQUEST['ne']?>
            <?php echo  $_REQUEST['n']?>
            </div>
          </td>
        </tr>
      </table>
      <div id="a">
  	<img src="assets/img/4.png" width="1100px" height="200px">
</div>
  <table width="1100px" border="1" background-color="white" bgcolor="black">
<thead>
<tr height="65px" bgcolor="white">

      <th width="120px">
        <div id="lo">
        <center>
      Codigo
      </center>
    </div>
  </th>
      <th width="285px">
        <div id="lo">
        <center>
        ㅤDescripcionㅤ
      </center>
    </div>
  </th>
      <th width="140px">
        <div id="lo">
        <center>
        ㅤColorㅤ
      </center>
    </div>
  </th>
      <th width="110px">
        <div id="lo">
        <center>
        ㅤMedidaㅤ
      </center>
    </div>
  </th>
      <td width="125px">
        <div id="los">
        <center>
        ㅤUnidadesㅤ
      </center>
    </div>
      </td>
      <th>
        <div id="lop">
        <center>
        Costo Unitario
        en $ㅤ
      </center>
    </div>
  </th>
      <th width="150px">
        <div id="lo">
        <center>
       &nbsp;&nbsp;Sub-total en $ㅤ
      </center>
    </div>
  </th>
</div>
  </tr>
</thead>
<tbody height="1px">
  <?php
  if(isset($_GET['Listo'])) {
    foreach ($productos as $index => $producto ):
  ?>
  <tr height="10px" bgcolor="white">
  <td>
    <center>
		<?php echo $producto['codigo']?>
</center>
  </td>
  <td>
	&nbsp;<?php echo $producto['descripcion']?>
	</td>
  <td>
		&nbsp;<?php echo $producto['color']?>
	</td>

  <td>
  <div id="lol">
		<?php echo $producto['medida']?>
  <div>
</td>
  <td>
    <div id="lol">
    <?php echo $producto['unidades']?>
</div>
  </td>
  <td>
    <div id="lol">
  <?php echo $producto['costo']?>
</div>
  </td>
  <td>
    <div id="lol">
    <?php echo $producto['subtotal'] ?>
  </div>
</td>
</tr>
<?php endforeach; ?>
<tr bgcolor="white">
<td id="rt" scope="row" colspan="3" height="1px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dólar promedio
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_REQUEST['dolar']?></div>
<td id="r2" rowspan="2" colspan="2" height="50px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total
<br>
&nbsp;&nbsp;&nbsp;Cantidad
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $producto['subtotal']; ?>
</td>
<th rowspan="3" colspan="2" >
  <div id="losk">
  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub-Total $
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<?php echo $tot1; ?>
  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
</div>
<p id="loss">Descuento 5% ya aplicado<p>
</th>
</tr>
<tr bgcolor="white" background-color="white" height="30px">
<td colspan="3" rowspan="4">
    <center>
    <div id="gras">
    Flete $
    <br>
   <br>
    <?php echo $_REQUEST['flete']?>
  </div>
  </td>
</tr>
<tr height="35px" bgcolor="white">
<td rowspan="3" colspan="2">
  <div id="losk">
   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Sub-Total Bs.
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $subs1;?>
  <br>
  <br>
  <br>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;IVA 16%&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
  <?php echo $iva1;?>
  <br>
  <hr>
  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<b>Total Bs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  <?php echo $totl1;?></b>
  <br>
</div>
</td>
</tr>
<tr bgcolor="white" height="30px">
<th rowspan="2" colspan="2" height="40px">
<div id="losk">
  Total $&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php echo $tot1;?>
</div>
</th>
</tr>
<tr bgcolor="white" height="50px">
</tr>
</tbody>
</table>
</div>
</center>
<?php
}
   ?>
</table></center>
<br>
<style>
#Formulario2{
     width: 1100px;
     height: 605px;
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
    #loss{
      font-size: 1.2em;
      color: red;
      }
      #losk{
        font-size: 1.2em;
        color: black;
        }
    #rt{
      color: blue;
      font-size: 1.7em;
      text-align: center;
    }
    #r1{
      color: blue;
      font-size: 1em;
      text-align: center;
    }
    #r2{
      color: blue;
      font-size: 1.3em;
      text-align: left;
    }
    #lop{
      color: black;
      font-size: 1.2em;
      text-align: center;
    }
    #gras{
      color: green;
      font-size: 2.3em;
    }
    #rk{
      color: blue;
      font-size: 1.9em;
    }
    #r{
      color: blue;
      font-size: 2em;
    }
</style>
</body>
</html>
