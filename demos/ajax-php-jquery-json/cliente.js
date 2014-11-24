// Recomiendo leer este archivo de abajo hacia arriba para comprenderlo mejor.
 
$(function(){
	
    function siRespuesta(r){
 
        // Crear HTML con las respuestas del servidor
        var rHtml = 'El resultado de la suma es: ' + r.suma + '<br/>';
            rHtml += 'El resultado del producto es: ' + r.producto;
 
        $('#respuesta').html(rHtml);   // Mostrar la respuesta del servidor en el div con el id "respuesta"
    }
 
    function siError(e){
        alert('Ocurrió un error al realizar la petición: '+e.statusText);
    }
 
    function peticion(e){
        // Realizar la petición
    	var parametros = {
            variable1: $('#text1').val(),
            variable2: $('#text2').val()
    	};
 
    	var post = $.post("servidor.php", parametros, siRespuesta, 'json');
 
        /* Registrar evento de la petición (hay mas)
           (no es obligatorio implementarlo, pero es muy recomendable para detectar errores) */
 
    	post.error(siError);         // Si ocurrió un error al ejecutar la petición se ejecuta "siError"
    }
 
    $('#botonCalcular').click(peticion); // Registrar evento al boton "Calcular" con la funcion "peticion"
});