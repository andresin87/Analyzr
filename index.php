<?php
require_once 'config/init.php';

Analyzr::LoadFile('config/analyzr.php');
if(Analyzr::GetFullSettings()==null){
	header("Location: install.php");
}

if(Authentication::IsLogged())
	header("Location: templates/");
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
		
		<link rel="stylesheet" href="assets/foundation/css/foundation.min.css" />
		<link rel="stylesheet" href="assets/foundation/css/foundation-icons.css" />
		<link rel="stylesheet" href="assets/css/premiumlogin.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/icons.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		
		
		<script type="text/javascript">var PLS_config = {ajax_url : '<?php echo Config::Get('base_url').'auth/ajax.php'; ?>'};</script>
		<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="assets/js/premiumlogin.min.js"></script>
		<script type="text/javascript" src="assets/foundation/js/foundation.min.js"></script>
		<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
		
		<script>
			function goBack() { window.history.back()() }
			function goForward() { window.history.forward() }
		</script>
	</head>
	<body>
		<div class="container">
			<div id="large-header" class="large-header" style="height: 100px;height: 100px;">
				<canvas id="demo-canvas" width="1578" height="602"></canvas>
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher" style="top:0px;">

				<?php include "templates/menu.php";?>

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
									<a style="margin-bottom: 50px" href="mailto:andres.lucas.upc@gmail.com?Subject=Proyect%20d3js" target="_top">
										<img class="index-image-profile" src="https://graph.facebook.com/andresin87/picture?type=large">
										<!--<div class="fa fa-smile-o font-10em"></div>-->
									</a>
									<br/>
									<span style="margin-top:30px;color: #eaeaea"class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
									  <i class="fa fa-info fa-stack-1x"></i>
									</span>
									<div class="font-08em" style="max-width: 500px; margin: 0 auto;">
										<p>
Este proyecto pertenece a Andrés Lucas Enciso. Su propósito es la utilización de frameworks opensource para la visualización de parámetros estadísticos de trafico y carga de enlaces de tráfico web.</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
			</div>
		</div><!-- /container -->
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	</body>
	<script>$(document).foundation();</script>
	<script type="text/javascript" src="assets/js/init/TweenLite.min.js"></script>
	<script type="text/javascript" src="assets/js/init/EasePack.min.js"></script>
	<script type="text/javascript" src="assets/js/init/rAF.js"></script>
	<script type="text/javascript" src="assets/js/init/init.js"></script>
</html>