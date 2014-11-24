<?php
	require( "config.php" );
	
	$values = $_POST['values'];
	$action = $_POST['action'];
	
	//$var1 = $_POST['variable1'];
	//$var2 = $_POST['variable2'];
	if($action=='' && $values==''){
		$values = isset($_GET['values']) ? $_GET['values'] : '';
		$action = isset($_GET['action']) ? $_GET['action'] : '';
	}
	$respuesta['values'] = $values;
	$respuesta['action'] = $action;
	
	//print_r(json_encode($respuesta));
	//exit();
	
	//echo('<html lang="es">');
	//echo('<head>');
	//	echo('<meta http-equiv="Content-Type" content="application/json; charset=utf-8">');
	//	echo('<title>JSON mediator php page</title>');
	//echo('</head>');
	//echo('<body>');	
	if($action!='')
	{	
		switch ($action){
			case 'getActualGeneralNodeStatus':
				$respuesta=json_decode(JSON::getActualGeneralNodeStatus());
				break;
			case 'getActualGeneralLinkStatus':
				$respuesta=json_decode(JSON::getActualGeneralLinkStatus());
				break;
			case 'getLastBySid':
				$respuesta['respuesta'] = json_decode(JSON::getLastBySid($values));
				break;
			case 'getListBySid':
				$respuesta['respuesta'] = json_decode(JSON::getListBySid($values));
				//$respuesta['respuesta'] = "resp";
				break;
			default:
				$respuesta['respuesta'] = "null";
				break;
		}
		print_r(json_encode($respuesta));
	}
	//echo('</body>');
	//echo('</html>');
?>