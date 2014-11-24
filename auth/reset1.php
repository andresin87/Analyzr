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
		<script type="text/javascript"> var PLS_config = {	ajax_url : '<?php echo Config::Get('base_url').'auth/ajax.php'; ?>',};</script>
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
						<div class="message-box"></div>
						<input type="password" name="password" placeholder="PASSWORD"/>
						<input type="password" name="cpassword" placeholder="CONFIRM PASSWORD"/>
						<input type="hidden" name="action" value="reset">
						<input type="hidden" name="key" value="<?php echo @$_GET['key'] ?>">
						<button class="button expand" type="submit" name="reset">RESET PASSWORD</button>
					</form>
				</div>
				<div class="large-12 columns links">
					<a class="link" href="../index.php">Go back</a>
				</div>
			</div>
		</div>
	</body>
</html>
