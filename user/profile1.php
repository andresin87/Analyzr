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
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../assets/foundation/css/foundation.min.css" />
	<link rel="stylesheet" href="../assets/css/premiumlogin.min.css" />
</head>
<body>
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
</body>
</html>
