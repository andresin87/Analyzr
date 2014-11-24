<?php
// <!-- PHP file ----------------------------------
// | este archivo es propiedad de andres lucas bajo
// | licencia cc. Utilizalo de forma ética.
// ----------------------------------------------->
// Crea un archivo HTML5 que muestra el código fuente
// del archivo especificado por una url especificada
// como parámetro
//
// Función show_code
// $url desde project
// Ej: //show_code("templates/content/tutorials/angularjs/1_basics/index.html");
//
//
function show_code($url){
	echo("<!DOCTYPE html>");
	echo("<html>");
		echo("<head>");
			echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF8" />');
		echo("</head>");
		echo("<body>");
			echo("THE FILE CONTAINS:");
			$file = $url;
			if($file=="")	echo "FILE DOESN'T EXIST";
			else {
				if(file_exists($file)){
					echo("<div>");
					
					$str = file_get_contents($file, FILE_USE_INCLUDE_PATH|ENT_HTML5);
					$str = htmlspecialchars($str);
					$str = str_replace(array(chr(10),chr(13)), "<br>", $str);
					$str = str_replace(array(chr(9)), "&nbsp&nbsp&nbsp&nbsp", $str);
					echo($str);
					echo("</div>");
				}
				else echo "FILE ". $file ." DOESN'T EXIST";
			}
		echo("</body>");
	echo("</html>");
}
?>