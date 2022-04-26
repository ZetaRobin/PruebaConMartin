<?php

    require './conexion.php';


    $conexion = conectar();
    

    $numero =  trim( $_GET["numero"] );
    $codigo =  trim( $_GET["codigo"] );
    $unidades = (int) trim( $_GET["unidades"] );
    $costo = (float) trim( $_GET["costo"] );
    $dolar =  trim( $_GET["dolar"] );
    $flete =  trim( $_GET["flete"] );
    $total = $unidades * $costo;

    if( isset( $_GET["Listo"] ) ){
        
        $consulta = "INSERT INTO productos VALUES (
                        NULL,
                        '$codigo',
                        '$numero',
                        '---',
                        '$flete',
                        '$unidades','
                        $costo',
                        '$total'
                        );";
        
        mysqli_query($conexion, $consulta);
        header('Location: productos.php');
        
    }else{
        $mensaje = "El producto no ha podido ser registrado";
		header('Location: registro_producto.php?message=' . urlencode( $mensaje ));
    }