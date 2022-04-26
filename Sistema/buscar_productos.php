<?php

	function buscar_productos( $codigos, $unidades, $costos, $conexion ){

		$productos = array();

		foreach ( $codigos as $index => $codigo ) {
			
			$consulta = "SELECT `id`, `codigo`, `descripcion`, `color`, `medida`, `unidades`, `costo`, `total` FROM `productos` WHERE `codigo`='$codigo';";

			$resultado = $conexion->query( $consulta );
			$resultado = $resultado->fetch_array();

			if( $resultado ){
				array_push( $productos, [
					'id' => $resultado['id'],
					'codigo' => $resultado['codigo'],
					'descripcion' => $resultado['descripcion'],
					'color' => $resultado['color'],
					'medida' => $resultado['medida'],
					'unidades' => $unidades[$index],
					'costo' => $costos[$index],
					'subtotal' => $unidades[$index] * $costos[$index]
				]);				
			}
		}

		return $productos;

	}