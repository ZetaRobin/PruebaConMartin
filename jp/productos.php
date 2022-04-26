

<?php
    
    require './mensajes.php';
    require './conexion.php';

    $conexion = conectar();
    $resultado = mysqli_query( $conexion, "SELECT * FROM productos;");
    $productos = array();

    while( $producto = mysqli_fetch_array( $resultado ) ){
        
        array_push( $productos, [
            'id' => $producto['id'],
            'codigo' => $producto['codigo'],
            'descripcion' => $producto['descripcion'],
            'color' => $producto['color'],
            'medida' => $producto['medida'],
            'unidades' => $producto['unidades'],
            'costo' => $producto['costo'],
            'total' => $producto['total']
        ] );
    }


?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<title>Reporte</title>
  
</head>
<body background="assets/img/3.png">
    <div class="espaciado">
        
    <style>
        
        .espaciado{
            padding: 150px 25px;
            display: flex;
            justify-content: center;
            align-content: center;
            }
            table{
                background: #fff;
                }
                thead{
                    background: #fd0;
                    color: #333;
                    border: 1px solid #fd0;
                    font-size: 25px;
                }
        .popup{
        width: 80%;
        height: 80%;
        position: absolute;
            display: block;
        background: #fff;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        border: 1px solid grey;
    }
    .d-none{
        display: none;
        }
    .text-center{
        text-align: center
        }
        .text-right{
            text-align: right;
            }
    </style>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Color</th>
                <th>Medida</th>
                <th>Unidades</th>
                <th>Costo</th>
                <th>Total</th>
                <th>Opc</th>
            </tr>
        </thead>
        <tbody>
           <?php
            foreach( $productos as $producto ):
            ?>
               <tr>
                    <td><?= $producto['id'] ?></td>
                    <td><?= $producto['codigo'] ?></td>
                    <td><?= $producto['descripcion'] ?></td>
                    <td><?= $producto['color'] ?></td>
                    <td><?= $producto['medida'] ?></td>
                    <td><?= $producto['unidades'] ?></td>
                    <td><?= $producto['costo'] ?></td>
                    <td><?= $producto['total'] ?></td>
                    <td>
                        <button>Editar</button>
                        <button>Borrar</button>
                    </td>
                </tr>
            <?php
            endforeach;
           ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9" class="text-right">
                   <br>
                    <button class="btn-abrir-ventana">Registrar nuevo producto</button>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
    
    <div class="popup d-none">
        <button class="btn-close-popup">
            cerrar
        </button>
           
        <form action="./guardar_producto.php" method="GET">
        
            <input type="text"  name="numero" size="10" maxlength="10" placeholder="Numero Reporte" required />
            <input type="text"  name="codigo" size="10" maxlength="10" placeholder="Código" required />
            <input type="text"  name="unidades" size="5" maxlength="5" placeholder="Unidades" />
            <input type="text"  name="costo" size="10" maxlength="10" placeholder="Costo unitario en $"  />
            <input type="text"  name="dolar" size="10" maxlength="10" placeholder="Dolar promedio"  />
            <input type="text"  name="flete" size="10" maxlength="10" placeholder="Precio Flete"  />
            <input type="submit" name="Listo" value="Listo">
        </form>
    </div>
    
    <script>
        ( () => {
            
            
            document.addEventListener( "click", element => {
                
                
                
                if( element.target.matches( ".btn-abrir-ventana" ) || 
                    element.target.matches( ".btn-close-popup" )
                  ){
                    console.log( document.querySelector( ".popup" ) );
                    document.querySelector( ".popup" ).classList.toggle( 'd-none' );
                }
                
            });
            
        })();
        // btn-abrir-ventana
    </script>
    
</body>