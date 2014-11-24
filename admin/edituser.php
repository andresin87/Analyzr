<?php if(!defined('ADMIN')) die("Access denied!");
$edit_user = new User();
if(isset($_GET['id']) && $edit_user->Load(array('id' => $_GET['id']))):	?>
<div class="row">
	<div class="medium-6 columns x-center admin">
		<form class="ajaxform" method="POST" action="">
			<div class="large-12 columns ">
				<h4>Edit an user</h4>
				<h4 class="border"></h4>
				<div class="message-box"></div>
				<input type="text" name="username" placeholder="Username" value='<?php echo $edit_user->Get("username");?>'/>
				<input type="text" name="email" placeholder="Email" value='<?php echo $edit_user->Get("email");?>'/>
			</div>
			<div class="large-6 columns">
				<select name="user_type">
					<option value="user" <?php echo ($edit_user->Get("user_type") == 'user')?'selected':'';?>>user</option>
					<option value="admin" <?php echo ($edit_user->Get("user_type") == 'admin')?'selected':'';?>>admin</option>
				</select>
			</div>
			<div class="large-6 columns">
				<select name="activation_state">
					<option value="1" <?php echo ($edit_user->Get("activation_state") == '1')?'selected':'';?>>activated</option>
					<option value="0" <?php echo ($edit_user->Get("activation_state") == '0')?'selected':'';?>>unactivated</option>
				</select>
			</div>
			<div class="large-12 columns">
				<input type="text" name="fullname" placeholder="Full name" value='<?php echo $edit_user->Get("fullname");?>'/>
				<input type="text" name="phone" placeholder="Phone number" value='<?php echo $edit_user->Get("phone");?>'/>
				<input type="text" name="location" placeholder="Location" value='<?php echo $edit_user->Get("location");?>'/>
				<textarea name="about" placeholder="About..."><?php echo $edit_user->Get("about");?></textarea>
				<input type="password" name="password" placeholder="Enter a new password"/>
				<input type="password" name="cpassword" placeholder="Confirm password" />
				<input type="radio" name="gender" value="F" id="female" <?php if($edit_user->Get("gender") == "F") echo "checked";?>><label for="female">Female</label>
				<input type="radio" name="gender" value="M" id="male" <?php if($edit_user->Get("gender") == "M") echo "checked";?>><label for="male">Male</label>
				<input type="radio" name="gender" value="O" id="other" <?php if($edit_user->Get("gender") == "O") echo "checked";?>><label for="other">Other</label>
				<input type="hidden" name="action" value="admin_edit">
				<input type="hidden" name="user_id" value="<?php echo $_GET['id']; ?>">
				<button class="button expand" type="submit" name="edituser">SAVE CHANGES</button>
			</div>
		</form>
	</div>
</div>
<?php else: header('Location: index.php'); endif; ?>