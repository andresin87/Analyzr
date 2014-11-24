<?php
	require( "config.php" );
	$json = JSON::getListBySid("GAL");
	print_r($json);
	$json = JSON::getLastBySid("GAL");
	print_r($json);
?>