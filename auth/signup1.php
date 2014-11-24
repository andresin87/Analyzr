<?php
require_once '../config/init.php';

if(Authentication::IsLogged())
	header("Location: ../index.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../assets/foundation/css/foundation.min.css" />
		<link rel="stylesheet" href="../assets/css/premiumlogin.min.css" />
		<script type="text/javascript"> var PLS_config = {ajax_url : '<?php echo Config::Get('base_url').'auth/ajax.php'; ?>',};</script>
		<script type="text/javascript"> var RecaptchaOptions = {theme : 'custom', custom_theme_widget: 'PLS_recaptcha_widget'};</script>
		<script type="text/javascript" src="../assets/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="../assets/js/premiumlogin.min.js"></script>
	</head>
	<body>
		<div style="background-color: white; margin-bottom:20px;">
			<div class="row">
				<div class="large-12 columns x-center headerband">
					<img class="image" src="../assets/img/logo.png">
					<label class="headertext">Welcome, create an account to log in.</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="medium-6 columns x-center">
				<div class="medium-12 columns">
					<form class="ajaxform"  method="POST" action="">
						<div class="message-box hidden"></div> 
						<input type="text" name="username" placeholder="USERNAME">
						<input type="text" name="email" placeholder="EMAIL">
						<input type="password" name="password" placeholder="PASSWORD" />
						<input type="password" name="cpassword" placeholder="CONFIRM PASSWORD" />
						<div id="recaptcha_widget" class="panel medium-12 columns">
							<div class="captcha_img" id="recaptcha_image"></div>
							<div class="captcha_btn">
								<a class="link" href="javascript:Recaptcha.reload()">Reload</a><span class="orspan">-</span>
								<a class="recaptcha_only_if_image link" href="javascript:Recaptcha.switch_type('audio')">Listen</a>
								<a class="recaptcha_only_if_audio link" href="javascript:Recaptcha.switch_type('image')">Image</a>
								<span class="orspan">-</span>
								<a class="link" href="javascript:Recaptcha.showhelp()">Help</a>
							</div>
							<input class="captcha_input" type="text" id="recaptcha_response_field" name="recaptcha_response_field" placeholder="CAPTCHA">
						</div>
						<input type="hidden" name="action" value="signup">
						<button class="button expand" type="submit" name="signup">SIGN UP"</button>
					</form>
					<img class="or image" src="../assets/img/or.png">
				</div>
				<div class="medium-4 columns">
					<a onclick='PLS.Alert($(".message-box"), 2,"Loading ...");' href="connect.php?method=facebook" class="button expand buttonFacebook">FACEBOOK</a>
				</div>
				<div class="medium-4 columns">
					<a onclick='PLS.Alert($(".message-box"), 2,"Loading ...");' href="connect.php?method=twitter" class="button expand buttonTwitter">TWITTER</a>
				</div>
				<div class="medium-4 columns">
					<a onclick='PLS.Alert($(".message-box"), 2,"Loading ...");' href="connect.php?method=google" class="button expand buttonGoogle">GOOGLE +</a>
				</div>
				<div class="large-12 columns links">
					<a class="link" href="login.php">Log In</a><span class="orspan">-</span>
					<a class="link" href="recover.php">Forgot Password</a><span class="orspan">-</span>
					<a class="link" href="reactivate.php">Resend Activation Email</a>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=<?php echo Config::Get('captcha.public'); ?>"></script>
	</body>
</html>