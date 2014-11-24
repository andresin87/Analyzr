<?php
require_once '../config/init.php';

if(!Session::Get('twitter_user'))
	header('Location: ../index.php');

$user_data = Session::Get('twitter_user');
if(isset($_POST['continue']))
{
	$validator = new Validate();
	if($validator->AddValue('email', $_POST['email'])->AddPattern('email-unique')->Check())
	{
		$user_data['email'] = $_POST['email'];
		Authentication::ConnectTwitter($user_data);
	}
}
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
					<h6>Twitter doesn`t allow us to access your email account. Please enter your email adress to continue.</h6>
					<h6 class="border"></h6>
					<form method="POST" action="">
						<?php if(Error::HasErrors()): ?>
						<div class="alert-box alert">
							<ul>
								<?php foreach (Error::GetAll() as $key => $value) {echo '<li>'.$value.'</li>';}?>
							</ul>
						</div>
						<?php endif; ?>
						<input type="text" name="email" placeholder="EMAIL"/> 
						<button class="button expand" type="submit" name="continue">CONTINUE</button>
					</form>
				</div>
			</div>
		</div>  
	</body>
</html>
