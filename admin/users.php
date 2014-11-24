<?php if(!defined('ADMIN')) die("Access denied!");?>
<div class="row " >
	<div class="large-12 columns">
		<h4>Users</h4>
		<h4 class="border"></h4>
		<table class="responsive" id="users">
			<thead>
		        <tr>
		            <td></td>
		            <th>Username</th>
		            <th>Email</th>
		            <th>Connected</th>
		            <th>Type</th>
		            <th>Status</th>
		            <th>Joined</th>
		            <th>Actions</th>
		        </tr>
			</thead>
			<tbody>
			<?php 
			$users = User::GetUsers();
			if($users):
				$nr = 1;
				foreach ($users as $user) {?>
					<tr>
						<td><?php echo $nr;?></td>
			            <td><a href="../user/profile.php?id=<?php echo $user->Get('id');?>"><?php echo $user->Get('username');?></a></td>
			            <td><?php echo $user->Get('email');?></td>
			            <td><?php echo $user->Get('social_type');?></td>
			            <td><span class="label <?php echo ($user->Get('user_type') == 'user') ? 'secondary' : ''; ?>"><?php echo $user->Get('user_type');?></span></td>
			            <td><span class="label <?php echo ($user->Get("activation_state") == '1') ? 'success' : 'alert';?>"><?php echo ($user->Get('activation_state') == '1') ? 'activated' : 'unactivated';?></span></td>
			            <td style="width:86px;"><?php echo substr($user->Get('join_date'), 0, 10); ?></td>
			            <td>
						    <a href='?page=edituser&id=<?php echo $user->Get('id');?>' title="Edit user"><i class="fi-wrench medium"></i></a>
						    <a onclick='PLS.Compose("<?php echo $user->Get('email');?>");' title="Send email"><i class="fi-mail medium"></i></a>
						    <a onclick='PLS.ConfirmDelete("<?php echo $user->Get('id'); ?>", "<?php echo $user->Get('username'); ?>");' title="Delete user"><i class="fi-trash medium"></i></a>
					    </td>
					</tr>
				<?php $nr++;}
				endif; ?>
			</tbody>
		</table>
	</div>
</div>
