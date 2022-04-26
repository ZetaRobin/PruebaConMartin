// Funcion Anonima Autoejecutable.
( () => {

	// Delegacion del evento click al boton 
	document.addEventListener( "click", element => {

		// Que que al hacer click en la web se detecte que es el input o boton con el id #insertar_inputs
		if( element.target.matches( "#insertar_inputs" ) ){
			const $templateProducto = `
				<div class="row">
					<input type="text"  name="codigo[]" id="codigo" size="10" maxlength="10" placeholder="Código" required />
					<input type="text"  name="unidades[]" id="unidades" size="5" maxlength="5" placeholder="Unidades"  required />
					<input type="text"  name="costo[]" id="costo" size="10" maxlength="10" placeholder="Costo unitario en $"   required />
				</div>
			`;

			const $contentProductos = document.getElementById( "content_productos" );

			$contentProductos.insertAdjacentHTML( "beforeend" , $templateProducto );

		}

	});

})();