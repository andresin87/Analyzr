<?php
require_once '../config/init.php';

if(!Authentication::IsLogged())
	header("Location: ../index.php");

$user = Session::Get("current_user");
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
		<script type="text/javascript" src="../assets/jcrop/js/jquery.Jcrop.min.js"></script>
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
										<div id="crop_modal" class="reveal-modal small" data-reveal>
											<h5>Upload a new profile image</h5>
											<h5 class="border"></h5>
											<div class="button tiny crop_upload">
											    Upload
												<input type="file" name="upload_field">
										    </div>
										    <form class="ajaxform crop_form" method="POST" action="">
										    	<div class="message-box"></div>
										    	<div class="crop_image"></div>
												<input type="hidden" id="x" name="x">
												<input type="hidden" id="y" name="y">
												<input type="hidden" id="w" name="w">
												<input type="hidden" id="h" name="h">
												<input type="hidden" name="action" value="settings_crop">
												<button type="submit" class="tiny success crop_save" disabled>Save</button>
										    </form>
											<a class="close-reveal-modal">&#215;</a>
										</div>
									</div>
									<!-- Main settings -->
									<br><br><br>
									<div class="row">
										<div class="medium-6 columns x-center">
											<div class="row">
												<div class="large-12 columns menu-wrapper">
													<dl class="tabs" data-tab="" style="min-width:450px;">
													  <dd class="active"><a href="#panel1"><i class="fi-widget"></i> General</a></dd>
													  <dd><a href="#panel2"><i class="fi-lock"></i> Avatar</a></dd>
													  <dd><a href="#panel3"><i class="fi-lock"></i> Password</a></dd>
													</dl>
												</div>
											</div>
											<div class="row">
												<div class="large-12 columns" style="background:white;">
													<div class="tabs-content">
														<div class="content active" id="panel1">
															<form class="ajaxform" method="POST" action="">
																<h5>Update your profile</h5>
																<h5 class="border"></h5> 	
																<div class="message-box"></div>
																<h6>Username :</h6>
																<input type="text" name="username" placeholder="Username" value='<?php echo $user->Get("username");?>'/>
																<h6>Email :</h6>
																<input type="text" name="email" placeholder="Email" value='<?php echo $user->Get("email");?>'/>
																<h6>Full name :</h6>
																<input type="text" name="fullname" placeholder="Your full name" value='<?php echo $user->Get("fullname");?>'/>
																<h6>Phone :</h6>
																<input type="text" name="phone" placeholder="Your phone number" value='<?php echo $user->Get("phone");?>'/>
																<h6>Location :</h6>
																<input type="text" name="location" placeholder="Your Location" value='<?php echo $user->Get("location");?>'/>
																<h6>About :</h6>
																<textarea name="about" placeholder="About yourself...."><?php echo $user->Get("about");?></textarea>
																<h6>Gender :</h6>
																<input type="radio" name="gender" value="F" id="female" <?php if($user->Get("gender") == "F") echo "checked";?>><label for="female">Female</label>
																<input type="radio" name="gender" value="M" id="male" <?php if($user->Get("gender") == "M") echo "checked";?>><label for="male">Male</label>
																<input type="radio" name="gender" value="O" id="other" <?php if($user->Get("gender") == "O") echo "checked";?>><label for="other">Other</label>
																<input type="hidden" name="action" value="settings_general">
																<button class="button expand" type="submit" name="changegeneral">SAVE SETTINGS</button><br>
															</form>
														</div>
														<div class="content" id="panel2">
															<a class="button tiny" data-reveal-id="crop_modal">Edit</a>
															<img class ="th avatar" src="<?php echo $user->GetAvatar();?>" style="width:100%;">
														</div>
														<div class="content" id="panel3">
															<form class="ajaxform" method="POST" action="">
																<h6>Change your password</h6>
																<h6 class="border"></h6>
																<div class="message-box"></div>
																<input type="password" name="opassword" placeholder="Old password"/>
																<input type="password" name="password" placeholder="New password"/>
																<input type="password" name="cpassword" placeholder="Confirm password"/>
																<input type="hidden" name="action" value="settings_password">
																<button class="button expand" type="submit" name="changepassword">CHANGE PASSWORD</button>
															</form>
														</div>
													</div>
												</div>
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
