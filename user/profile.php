<?php
require_once '../config/init.php';

if(isset($_GET['id']))
{
	$user = new User();
	if(!$user->Load(array('id' => $_GET['id'])))
		Error::Set('user', 'usernotfound');
}
else
	Error::Set('user', 'usernotfound');
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
									<div class="row">
										<?php if(Error::HasErrors()): ?>
											<div class="message-box alert-box alert">
												<ul><li><?php echo Error::GetFirst(); ?></li></ul>
											</div>
										<?php else:?>
											<div class="large-6 medium-6 columns x-center"  style="margin-top: 100px;">
												<div class="row">
													<div class="large-12 columns">
														<?php if(Authentication::IsLogged()): ?>
															<h5>Logged as <?php echo Session::Get('current_user')->Get('username'); ?></h5>
															<a class="link" href="../user/settings.php">My Account</a>
															<span class="orspan">-</span>
															<a class="link" href="../auth/logout.php">Logout</a>
														<?php else: ?>
															<a class="link" href="../auth/login.php">Log in</a>
															<span class="orspan">-</span>
															<a class="link" href="../auth/signup.php">Sign up</a>
														<?php endif; ?>
													</div>
												</div>
												<br>
												<div class="panel" style="background:white;">
												<div class="row">
													<div class="medium-6 columns">
														<img class="th" src="<?php echo $user->GetAvatar();?>">
													</div>
													<div class="medium-6 columns">
														<h5 style="padding-top:5px;"><?php echo $user->Get('username'); ?></h5>
														<label>Joined : <?php echo $user->Get('join_date'); ?></label>
													</div>
												</div>
												</div>
											</div>
										<?php endif;?>
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
