<?php

function connectDB(){

   $conexion = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if($conexion){
        //echo 'La conexión de la base de datos se ha hecho satisfactoriamente';
    }else{
        //echo 'Ha sucedido un error inesperado en la conexión de la base de datos';
    }   
    return $conexion;
}

function disconnectDB($conexion){

    $close = mysqli_close($conexion);

    if($close){
        //echo 'La desconexión de la base de datos se ha hecho satisfactoriamente';
    }else{
        //echo 'Ha sucedido un error inesperado en la desconexión de la base de datos';
    }
    return $close;
}

function orderByKey($array, $key){
	$i = count($array);
	$j=0;
	$res = array();
	for($j=$key; $j<$i; $j++){
		$res[count($res)]=$array[$j];
	}
	for($j=0;$j<$key;$j++){
		$res[count($res)]=$array[$j];
	}
	return $res;
}

/**
 * Classe de recogida de goles
 */

class JSON{
	public $json = null;
	
	/**
	 * Inicializa las propiedades del objeto en el vector sroporcionado
	 *
	 * @param associa los valores de las propiedades
	 */	
	public function __construct( $data=array()){
		if(isset($data))			$this->json = utf8_encode(json_encode($data));
	}
	
	/**
	 * Sets the object's properties using the edit form post values in the supplied array
	 *
	 * @param assoc The form post values
	 */
	public function storeFromValues($params){
		// Almacena todos los parametros
		$this->__construct($params);
		
		// Convierte y almacena la fecha
		//if()
	}

	/**
	 * Returns an Article object matching the given article ID
	 *
	 * @param int The article ID
	 * @return Article|false The article object, or false if the record was not found or there was a problem
	 */
	public static function getListBySid($name){
		 $sql = "SELECT rrd_key, ".$name." FROM rrd_min";
		 $conexion = connectDB();	//Creamos la conexión con la función conexión
		 mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
		 //echo("<br/>".$sql."<br/>");
		 if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
		 if(!$TOTresult = mysqli_query($conexion, "SELECT rrd_key FROM rrd_min_key")) die(); //si la conexión cancelar programa
		 $rawdata = array(); //creamos un array
		 
		 $i=0;
	     while($row = mysqli_fetch_array($result))
	     {
	     	$rawdata[$i] = $row;
	     	//print_r("<br/>".$rawdata[$i]."<br/>");
	        $i++;
		 }
		 $key=null;
		 while($row = mysqli_fetch_array($TOTresult))
	     {
	     	$key=$row['rrd_key'];
	     	//print_r($key);	
		 }
		 
		 //guardamos en un array multidimensional todos los datos de la consulta
		 disconnectDB($conexion); //desconectamos la base de datos
		 //print_r(json_encode($rawdata));
		 
		 return json_encode(orderByKey($rawdata,$key));
	}
	
	public static function getLastBySid($name){
		 
		 $conexion = connectDB();	//Creamos la conexión con la función conexión
		 mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
		 //echo("<br/>".$sql."<br/>");
		 
		 if(!$TOTresult = mysqli_query($conexion, "SELECT rrd_key FROM rrd_min_key")) die(); //si la conexión cancelar programa
		 $key=null;
		 while($row = mysqli_fetch_array($TOTresult))
	     {
	     	$key=$row['rrd_key'];
	     	//print_r($key);	
		 }
		 
		 //echo "key: ".$key."<br/>";
		 $sql = "SELECT rrd_key, ".$name." FROM rrd_min WHERE rrd_key='".$key."'";
		 if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
		 $rawdata = array(); //creamos un array
		 $i=0;
		 
	     while($row = mysqli_fetch_array($result))
	     {
	     	$rawdata[$i] = $row;
	     	//print_r("<br/>".$rawdata[$i]."<br/>");
	        $i++;
		 }
		 
		 //guardamos en un array multidimensional todos los datos de la consulta
		 disconnectDB($conexion); //desconectamos la base de datos
		 print_r(json_encode($rawdata));
		 
		 return json_encode($rawdata);
	}
	
	public static function getActualGeneralNodeStatus(){
		$conexion = connectDB();	//Creamos la conexión con la función conexión
		 mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
		if(!$TOTresult = mysqli_query($conexion, "SELECT rrd_key FROM rrd_min_key")) die(); //si la conexión cancelar programa
		 $key=null;
		 while($row = mysqli_fetch_array($TOTresult))
	     {
	     	$key=$row['rrd_key'];
	     	//print_r("key=".$key);	
		 }
		 
		 //echo "key: ".$key."<br/>";
		 $sql = "SELECT GAL, AST, CAB, UVA, CYL, PAV, NAV, RIO, UNIZAR, ARA, CAT, CIEMAT, TELMAD, MAD, BAL, UIB, UV, EXT, CLM, VAL, MUR, `AND`, CICA, `CAN-L`, ULPGC, IAC, `CAN-T` FROM rrd_min WHERE rrd_key='".$key."'";
		 if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
		 $rawdata = array(); //creamos un array
		 $i=0;
		 
	     while($row = mysqli_fetch_array($result))
	     {
	     	$rawdata[$i] = $row;
	     	//print_r("<br/>".json_encode($rawdata[$i])."<br/>");
	        $i++;
		 }
		 
		 //guardamos en un array multidimensional todos los datos de la consulta
		 disconnectDB($conexion); //desconectamos la base de datos
		 //print_r(json_encode($rawdata));
		 
		 return json_encode($rawdata);
	}
		public static function getActualGeneralLinkStatus(){
		$conexion = connectDB();	//Creamos la conexión con la función conexión
		 mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
		if(!$TOTresult = mysqli_query($conexion, "SELECT rrd_key FROM rrd_min_key")) die(); //si la conexión cancelar programa
		 $key=null;
		 while($row = mysqli_fetch_array($TOTresult))
	     {
	     	$key=$row['rrd_key'];
	     	//print_r("key=".$key);	
		 }
		 
		 //echo "key: ".$key."<br/>";
		 $sql = "SELECT `GAL-UVA`, `AST-UVA`, `CAB-UVA`, `PAV-UVA`, `PAV-UNIZAR`, `RIO-UNIZAR`, `NAV-UNIZAR`, `ARA-UNIZAR`, `CAT-UNIZAR`, `CAT-UV`, `UNIZAR-UVA`, `UNIZAR-GAL`, `UNIZAR-RIO`, `UNIZAR-PAV`, `UNIZAR-NAV`, `UNIZAR-ARA`, `UNIZAR-CAT`, `UNIZAR-UIB`, `UNIZAR-TELMAD`, `UVA-CYL`, `UVA-GAL`, `UVA-AST`, `UVA-CAB`, `UVA-PAV`, `UVA-UNIZAR`, `UVA-CIEMAT`, `CYL-UVA`, `CIEMAT-TELMAD`, `CIEMAT-MAD`, `CIEMAT-CLM`, `CIEMAT-CICA`, `CIEMAT-EXT`, `CIEMAT-IAC`, `TELMAD-CIEMAT`, `TELMAD-IAC`, `TELMAD-MAD`, `TELMAD-UNIZAR`, `TELMAD-UV`, `MAD-CIEMAT`, `MAD-TELMAD`, `UIB-UNIZAR`, `UIB-BAL`, `UIB-UV`, `BAL-UIB`, `UV-TELMAD`, `UV-CAT`, `UV-UIB`, `UV-VAL`, `UV-MUR`, `UV-AND`, `UV-CICA`, `VAL-UV`, `MUR-UV`, `MUR-CICA`, `CLM-CIEMAT`, `AND-CICA`, `AND-UV`, `CICA-EXT`, `CICA-CIEMAT`, `CICA-UV`, `CICA-AND`, `CICA-MUR`, `CICA-ULPGC`, `EXT-CIEMAT`, `EXT-CICA`, `CAN-L-ULPGC`, `ULPGC-CAN-L`, `ULPGC-CICA`, `ULPGC-IAC`, `IAC-ULPGC`, `IAC-CIEMAT`, `IAC-TELMAD`, `IAC-CAN-T`, `CAN-T-IAC`,`GAL-UNIZAR`, `CIEMAT-UVA` FROM rrd_min WHERE rrd_key='".$key."'";
		 if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
		 $rawdata = array(); //creamos un array
		 $i=0;
		 
	     while($row = mysqli_fetch_array($result))
	     {
	     	$rawdata[$i] = $row;
	     	//print_r("<br/>".json_encode($rawdata[$i])."<br/>");
	        $i++;
		 }
		 
		 //guardamos en un array multidimensional todos los datos de la consulta
		 disconnectDB($conexion); //desconectamos la base de datos
		 //print_r(json_encode($rawdata));
		 
		 return json_encode($rawdata);
	}
}