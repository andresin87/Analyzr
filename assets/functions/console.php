<?php
// <!-- PHP file ----------------------------------
// | este archivo es propiedad de andres lucas bajo
// | licencia cc. Utilizalo de forma ética.
// ----------------------------------------------->
// Saca por consola todo la cadena especificada como
// atributo
//
// Función console_log($string)
// $string
// Ej: //console_log("string");
//
function console_log($string){
	echo('<script type="javascript/text">');
        echo("console.log(" . $string . ");");
	echo("</script>");
}