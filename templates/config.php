<?php
	ini_set( "display_errors", true );
	date_default_timezone_set( "Europe/Madrid" );  // http://www.php.net/manual/en/timezones.php
	define( "DB_DSN", "mysql:host=host;dbname=ddbb" );
	define( "DB_HOST", "host");
	define( "DB_DATABASE", "db");
	define( "DB_USERNAME", "user" );
	define( "DB_PASSWORD", "key" );
	
	define( "CLASS_PATH", "classes" );
	define( "TEMPLATE_PATH", "templates" );
	define( "MAX_RESULT", 10000 );
	
	//require( CLASS_PATH . "/Users.php" );
	//require( CLASS_PATH . "/Date.php" );
	require( CLASS_PATH . "/JSON.php" );
	
	function handleException( $exception ) {
	  echo "<h1>Disculpi, ha ocurregut un problema. Intenti-ho mes tard.</h1>";
	  error_log( $exception->getMessage() );
	}
	
	set_exception_handler( 'handleException' );
?>