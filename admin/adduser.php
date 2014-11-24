<?php if(!defined('ADMIN')) die("Access denied!");?>
<div class="row">
	<div class="medium-6 columns x-center admin">
		<form class="ajaxform" method="POST" action="">
			<div class="large-12 columns ">
				<h4>Create a new user</h4>
				<h4 class="border"></h4>
				<div class="message-box"></div>
				<input type="text" name="username" placeholder="Username"/>
				<input type="text" name="email" placeholder="Email"/>
			</div>
			<div class="large-6 columns ">
				<select name="user_type">
					<option value="user">user</option>
					<option value="admin">admin</option>
				</select>
			</div>
			<div class="large-6 columns ">
				<select name="activation_state">
					<option value="1">activated</option>
					<option value="0">unactivated</option>
				</select>
			</div>
			<div class="large-12 columns ">
				<input type="password" name="password" placeholder="Password" />
				<input type="password" name="cpassword" placeholder="Confirm password" />
				<input id="emailpassword" type="checkbox" name="emailpassword">
				<label class="remember" for="emailpassword">Email password to the user.</label>
				<input type="hidden" name="action" value="admin_add">
				<button class="button expand" type="submit" name="adduser">ADD USER</button>
			</div>
		</form>
	</div>
</div>