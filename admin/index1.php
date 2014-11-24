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
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../assets/foundation/css/foundation.min.css" />
	<link rel="stylesheet" href="../assets/foundation/css/foundation-icons.css" />
	<link rel="stylesheet" href="../assets/foundation/css/responsive-tables.css" />
	<link rel="stylesheet" href="../assets/datatables/css/foundation-dataTables.css" />
	<link rel="stylesheet" href="../assets/css/premiumlogin.min.css" />
	<script type="text/javascript"> var PLS_config = {	ajax_url : '<?php echo Config::Get('base_url').'auth/ajax.php'; ?>',};</script>
	<script type="text/javascript" src="../assets/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../assets/js/premiumlogin.min.js"></script>
	<script type="text/javascript" src="../assets/foundation/js/foundation.min.js"></script>
	<script type="text/javascript" src="../assets/foundation/js/responsive-tables.js"></script>
	<script type="text/javascript" src="../assets/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../assets/datatables/js/dataTables.foundation.js"></script>
</head>
<body>
	<!-- Top bar -->
	<div class="sticky">
		<nav class="top-bar" data-topbar data-options="is_hover: false">
			<ul class="title-area">
				<li class="name active"><h1><a href="../">EdcoreWeb</a></h1></li>
				<li class="toggle-topbar menu-icon"><a>Menu</a></li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<li class="divider"></li>
					<li class="has-dropdown">
						<a>
							<img src="<?php echo $user->GetAvatar();?>" style="height:30px;">
							<span class="username"><?php echo $user->Get("username");?></span> 
						</a>
						<ul class="dropdown">
							<li><a href="../user/"><i class="fi-widget"></i> Settings</a></li>
							<li><a href="./"><i class="fi-lock"></i> Admin</a></li>
							<li class="divider"></li>
							<li><a href="../auth/logout.php"><i class="fi-power"></i> Logout</a></li>
						</ul>
					</li>   
				</ul>
				<ul class="left">
					<li class="active"><a href="./"><i class="fi-lock"></i> Admin</a></li>
					<li><a href="./?page=adduser"><i class="fi-plus"></i> Add User</a></li>
					<li class="divider"></li>
					<li><a onclick='PLS.Compose("");'><i class="fi-mail"></i> Compose Email</a></li>
				</ul>
			</section>
		</nav>
	</div>
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
	<br><br>
<?php
if(isset($_GET['page']))
{
	switch ($_GET['page']) 
	{
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
<script>$(document).foundation();</script>
<script>$(document).ready(function(){$('#users').dataTable();});</script>
</body>
</html>