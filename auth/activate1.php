<?php
require_once '../config/init.php';

if(Authentication::IsLogged())
	header("Location: ../index.php");

$success = Authentication::Activate(@$_GET['key']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../assets/foundation/css/foundation.min.css" />
		<link rel="stylesheet" href="../assets/css/premiumlogin.min.css" />
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
					<div class="message-box alert-box <?php echo ($success) ? 'success' : 'alert'; ?>">
						<ul><li><?php echo (!empty($success)) ? Config::Get('success.activate') : Error::GetFirst(); ?></li></ul>
					</div> 
				</div>
				<div class="large-12 columns links">
					<a class="link" href="../index.php">Volver</a>
				</div>
			</div>
		</div>
	</body>
</html>
