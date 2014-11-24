<?php
	require_once 'config/init.php';
	
Analyzr::LoadFile('config/analyzr.php');
if(Analyzr::GetFullSettings()!=null){
	header("Location: index.php");
}
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
								<p><a href="#" id="trigger" class="menu-trigger" style="display: none;">MENU</a></p>
							</div>
						</div>
						<!-- Top Navigation -->
						<!--<header class="codrops-header">
							<h1>Multi-Level Push Menu <span>Off-screen navigation with multiple levels</span></h1>
						</header>-->
						<div class="welcome">
							<div class="block block-100">
								<div class="block block-100 padding-r-10 padding-l-10 align-center">
									<form>
										<div id="db-form">
											<p>Database:</p>
											<table width="100%">
												<tbody style="text-align: right;">
													<tr>
														<td width="30%">Host de la Base de datos:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="db-host" value="localhost"/></td>
													</tr>
													<tr>
														<td>Nombre de la base de datos:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="db-name" value="initializr-db"/></td>
													</tr>
													<tr>
														<td>Puerto de la base de datos:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="db-name" value="3006"/></td>
													</tr>
													<tr>
														<td>Nombre de usuario de la base de datos:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="db-user"/></td>
													</tr>
													<tr>
														<td>Contraseña de MySQL:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="db-key"/></td>
													</tr>
												</tbody>
											</table>
											<button type="button">Comprobar</button>
											<button type="button">Siguiente</button>
											<br/>
											<br/>
										</div>
										<div id="db-admin" style="display: none">
											<p>Admin:</p>
											<table width="100%">
												<tbody style="text-align: right;">
													<tr>
														<td width="30%">Admin mail:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="admin-mail" disabled/></td>
													</tr>
													<tr>
														<td>User Admin:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="admin-user" disabled/></td>
													</tr>
													<tr>
														<td>Contraseña Administrador:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="admin-key" disabled/></td>
													</tr>
													<tr>
														<td>Repita contraseña administrador:</td>
														<td><input style="margin: 0 0 0 0; padding: 5px; height: 2rem!important; " type="text" name="admin-key-check" disabled/></td>
													</tr>
												</tbody>
											</table>
											<button type="button" disabled>Comprobar</button>
											<button type="button" disabled>Siguiente</button>
											<br/>
											<br/>
										</div>
									</form>
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