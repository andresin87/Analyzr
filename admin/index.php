<?php
require_once '../config/init.php';

if(!Authentication::IsLogged())
  header("Location: ../index.php");

$user = Session::Get('current_user');
if(!$user->IsAdmin())
	header("Location: ../index.php");
else
	define("ADMIN", 1);

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
		
		<link rel="stylesheet" href="../assets/foundation/css/foundation.min.css" />
		<link rel="stylesheet" href="../assets/foundation/css/foundation-icons.css" />
		<link rel="stylesheet" href="../assets/foundation/css/responsive-tables.css" />
		<link rel="stylesheet" href="../assets/datatables/css/foundation-dataTables.css" />
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
		<script type="text/javascript" src="../assets/foundation/js/responsive-tables.js"></script>
		<script type="text/javascript" src="../assets/datatables/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../assets/datatables/js/dataTables.foundation.js"></script>
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
								<div class="block block-100 padding-r-10 padding-l-10">
									<!-- Confirm delete modal -->
									<div class="row">
										<div id="confirmdelete" class="reveal-modal small" data-reveal>
											<div class="medium-12 columns">
												<form class="ajaxform" method="POST" action="">
													<h4>Confirm action</h4>
													<span class="border" style="display: block;"></span>
													<div class="message-box"></div>
													<p>Are you sure you want to delete user <strong></strong> ?</p>
												  	<input type="hidden" name="user_id" value="">
												  	<input type="hidden" name="action" value="admin_delete">
													<button type="submit" class="button alert tiny" style="float: right;" name="delete">Yes</button>
												</form>
											</div>
											<a class="close-reveal-modal">&#215;</a>
										</div>
									</div>
									<!-- Email modal -->
									<div class="row">
										<div id="compose" class="reveal-modal small" data-reveal>
											<div class="medium-12 columns">
											  	<form class="ajaxform" method="POST" action="">
											 		<h4>Compose an email</h4>
													<span class="border" style="display: block;"></span>
													<div class="message-box"></div>
													<input type="text" name="email" placeholder="To"/>
													<input type="text" name="subject" placeholder="Subject"/>
													<textarea name="message" placeholder="Message...." style="min-height:130px;"></textarea>
													<input type="hidden" name="action" value="admin_compose">
													<button class="button expand" type="submit" name="sendemail">SEND EMAIL</button>
												</form>
											</div>
											<a class="close-reveal-modal">&#215;</a>
										</div>
									</div>
									<br><br>
								<?php
								if(isset($_GET['page']))
								{
									switch ($global_page) {
										case 'adduser':
											require 'adduser.php';
											break;
										
										case 'edituser':
											require 'edituser.php';
											break;
										case 'sendmail':
											require 'sendmail.php';
											break;
										default:
											require 'users.php';
											break;
									}
								}
								else
									require 'users.php';
								?>
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
		<script>$(document).foundation();</script>
		<script>$(document).ready(function(){$('#users').dataTable();});</script>
	</body>
</html>