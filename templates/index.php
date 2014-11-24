<?php
require_once '../config/init.php';

if(!Authentication::IsLogged())
	header("Location: ../index.php");

$user = Session::Get("current_user");

require( "config.php" );
?>
<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Multi-Level Push Menu - Demo 3</title>
		<meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels" />
		<meta name="keywords" content="Spain, Rediris, Traffic Map, d3js" />
		<meta name="author" content="Andrés Lucas Enciso" />
		
		<link rel="shortcut icon" href="../favicon.ico">
		
		<?php
			if(isset($_GET['page']))
			{
				switch ($global_page) 
				{
					
					case 'traffic':
						require 'internal/header/header-traffic.php';
						break;
					
					case 'matrix':
						require 'internal/header/header-matrix.php';
						break;
					default:
						break;
				}
			}
		?>
		
		<link rel="stylesheet" href="../assets/foundation/css/foundation.min.css" />
		<link rel="stylesheet" href="../assets/foundation/css/foundation-icons.css" />
		<link rel="stylesheet" href="../assets/css/premiumlogin.min.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/icons.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/component.css" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/pure.css">
		
		<script type="text/javascript">var PLS_config = {ajax_url : '<?php echo Config::Get('base_url').'auth/ajax.php'; ?>'};</script>
		<!--<script type="text/javascript" src="../assets/js/jquery-1.11.0.min.js"></script>-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="../assets/js/premiumlogin.min.js"></script>
		<script type="text/javascript" src="../assets/foundation/js/foundation.min.js"></script>
		<script type="text/javascript" src="../assets/js/modernizr.custom.js"></script>
		<script>
			function goBack() { window.history.back()() }
			function goForward() { window.history.forward() }
		</script>
	</head>
	<body>
		<div class="container">
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

				<?php include "menu.php";?>

				<div class="scroller">
				<!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">
						<div class="content clearfix">
							<div class="block block-20 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">MENU</a></p>
							</div>
						</div>
						<!-- Top Navigation -->
						<!--<header class="codrops-header">
							<h1>Multi-Level Push Menu <span>Off-screen navigation with multiple levels</span></h1>
						</header>-->
						<div class="welcome">
							<div class="block block-100">
								<div class="block block-100 padding-r-10 padding-l-10 align-center">
								<?php
								if(isset($_GET['page']))
								{
									switch ($global_page) 
									{
										case 'traffic':
											require 'internal/body/body-traffic.php';
											break;
										
										case 'matrix':
											require 'internal/body/body-matrix.php';
											break;
										default:
											break;
									}
								}
								else{
									echo '<h1>Que deseas hacer hoy?</div>';
									require 'internal/body/body-none.php';
								}
								?>
								</div>
								
							</div>
							<?php
								if($global_page=='traffic'){
							?>
								<div style="margin-left: 50px; margin-top:534px; margin-bottom:50px; width: 662px;">
									<div onclick="funcButtonLines(this)" id="button-lines" class="button-xsmall pure-button">Lines</div>
									<div onclick="funcButtonCells(this)" id="button-cells" class="button-xsmall pure-button">Cells</div>
								</div>
							<?php
								}
							?>
						</div>
						
					</div><!-- /scroller-inner -->
					
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script type="text/javascript">
			function funcButtonLines(elem){
				$('#redirismapTrafficMenuSelector').click();
			}
			function funcButtonCells(elem){
				$('#redirismapCellsMenuSelector').click();
			}
		</script>
		<script src="../assets/js/classie.js"></script>
		<script src="../assets/js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	</body>
	<script>$(document).foundation();</script>
</html>