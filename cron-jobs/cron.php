<?php
	require( "../templates/config.php" );
	$values = array();
	for($i=0; $i<104; $i++){
		$values[$i]=rand(0,100000);
		//echo($i.".- ".$values[$i]."<br>");
	}
	$sql = "REPLACE INTO rrd_min (attribute_key, start_utime, logging_interval,	GAL, AST, CAB, UVA, CYL, PAV, NAV, RIO, UNIZAR, ARA, CAT, CIEMAT, TELMAD, MAD, BAL, UIB, UV, EXT, CLM, VAL, MUR, `AND`, CICA, `CAN-L`, ULPGC, IAC, `CAN-T`, `GAL-UVA`, `AST-UVA`, `CAB-UVA`, `PAV-UVA`, `PAV-UNIZAR`, `RIO-UNIZAR`, `NAV-UNIZAR`, `ARA-UNIZAR`, `CAT-UNIZAR`, `CAT-UV`, `UNIZAR-UVA`, `UNIZAR-GAL`, `UNIZAR-RIO`, `UNIZAR-PAV`, `UNIZAR-NAV`, `UNIZAR-ARA`, `UNIZAR-CAT`, `UNIZAR-UIB`, `UNIZAR-TELMAD`, `UVA-CYL`, `UVA-GAL`, `UVA-AST`, `UVA-CAB`, `UVA-PAV`, `UVA-UNIZAR`, `UVA-CIEMAT`, `CYL-UVA`, `CIEMAT-TELMAD`, `CIEMAT-MAD`, `CIEMAT-CLM`, `CIEMAT-CICA`, `CIEMAT-EXT`, `CIEMAT-IAC`, `TELMAD-CIEMAT`, `TELMAD-IAC`, `TELMAD-MAD`, `TELMAD-UNIZAR`, `TELMAD-UV`, `MAD-CIEMAT`, `MAD-TELMAD`, `UIB-UNIZAR`, `UIB-BAL`, `UIB-UV`, `BAL-UIB`, `UV-TELMAD`, `UV-CAT`, `UV-UIB`, `UV-VAL`, `UV-MUR`, `UV-AND`, `UV-CICA`, `VAL-UV`, `MUR-UV`, `MUR-CICA`, `CLM-CIEMAT`, `AND-CICA`, `AND-UV`, `CICA-EXT`, `CICA-CIEMAT`, `CICA-UV`, `CICA-AND`, `CICA-MUR`, `CICA-ULPGC`, `EXT-CIEMAT`, `EXT-CICA`, `CAN-L-ULPGC`, `ULPGC-CAN-L`, `ULPGC-CICA`, `ULPGC-IAC`, `IAC-ULPGC`, `IAC-CIEMAT`, `IAC-TELMAD`, `IAC-CAN-T`, `CAN-T-IAC`, `GAL-UNIZAR`, `CIEMAT-UVA`) VALUES(".$values[0].", UNIX_TIMESTAMP(NOW()), 1000, ".$values[1].", ".$values[2].", ".$values[3].", ".$values[4].", ".$values[5].", ".$values[6].", ".$values[7].", ".$values[8].", ".$values[9].", ".$values[10].", ".$values[11].", ".$values[12].", ".$values[13].", ".$values[14].", ".$values[15].", ".$values[16].", ".$values[17].", ".$values[18].", ".$values[19].", ".$values[20].", ".$values[21].", ".$values[22].", ".$values[23].", ".$values[24].", ".$values[25].", ".$values[26].", ".$values[27].", ".$values[28].", ".$values[29].", ".$values[30].", ".$values[31].", ".$values[32].", ".$values[33].", ".$values[34].", ".$values[35].", ".$values[36].", ".$values[37].", ".$values[38].", ".$values[39].", ".$values[40].", ".$values[41].", ".$values[42].", ".$values[43].", ".$values[44].", ".$values[45].", ".$values[46].", ".$values[47].", ".$values[48].", ".$values[49].", ".$values[50].", ".$values[51].", ".$values[52].", ".$values[53].", ".$values[54].", ".$values[55].", ".$values[56].", ".$values[57].", ".$values[58].", ".$values[59].", ".$values[60].", ".$values[61].", ".$values[62].", ".$values[63].", ".$values[64].", ".$values[65].", ".$values[66].", ".$values[67].", ".$values[68].", ".$values[69].", ".$values[70].", ".$values[71].", ".$values[72].", ".$values[73].", ".$values[74].", ".$values[75].", ".$values[76].", ".$values[77].", ".$values[78].", ".$values[79].", ".$values[80].", ".$values[81].", ".$values[82].", ".$values[83].", ".$values[84].", ".$values[85].", ".$values[86].", ".$values[87].", ".$values[88].", ".$values[89].", ".$values[90].", ".$values[91].", ".$values[92].", ".$values[93].", ".$values[94].", ".$values[95].", ".$values[96].", ".$values[97].", ".$values[98].", ".$values[99].", ".$values[100].", ".$values[101].", ".$values[102].", ".$values[103].");";
	$conexion = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
	if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
	disconnectDB($conexion); //desconectamos la base de datos
?>