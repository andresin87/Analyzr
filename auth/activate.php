<?php
require_once '../config/init.php';

if(Authentication::IsLogged())
	header("Location: ../index.php");

$success = Authentication::Activate(@$_GET['key']);
?>
<!DOCTYPE html>

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
		
		<link rel="stylesheet" href="../assets/foundation/css/foundation.min.css" />
		<link rel="stylesheet" href="../assets/foundation/css/foundation-icons.css" />
		<link rel="stylesheet" href="../assets/css/premiumlogin.min.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/icons.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/component.css" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		
		<script type="text/javascript">var PLS_config = {ajax_url : '<?php echo Config::Get('base_url').'auth/ajax.php'; ?>'};</script>
		<script type="text/javascript" src="../assets/js/jquery-1.11.0.min.js"></script>
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

				<?php include "../templates/menu.php";?>

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
									<div style="margin-bottom:20px;">
										<div class="row">
											<div class="large-12 columns x-center headerband">
												<label class="headertext"></label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="medium-6 columns x-center">
											<div class="medium-12 columns">
												<div class="message-box alert-box <?php echo ($success) ? 'success' : 'alert'; ?>">
													<ul><li><?php echo (!empty($success)) ? Config::Get('success.activate') : Error::GetFirst(); ?></li></ul>
												</div> 
											</div>
											<div class="large-12 columns links">
												<a class="link" href="../index.php">Volver</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="../assets/js/classie.js"></script>
		<script src="../assets/js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	</body>
	<script>$(document).foundation();</script>
</html>
		