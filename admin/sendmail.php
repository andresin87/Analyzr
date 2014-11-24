<?php if(!defined('ADMIN')) die("Access denied!");?>
<!-- Email modal -->
<div class="row">
	<div class="medium-6 columns x-center admin">
	  	<form class="ajaxform" method="POST" action="">
	 		<h4>Compose an email</h4>
			<span class="border" style="display: block;"></span>
			<div class="message-box"></div>
			<input type="text" name="email" placeholder="To"/>
			<input type="text" name="subject" placeholder="Subject"/>
			<textarea name="message" placeholder="Message...." style="min-height:130px;"></textarea>
			<input type="hidden" name="action" value="admin_compose">
			<button class="button expand" type="submit" name="sendemail">SEND EMAIL</button>
		</form>
	</div>
</div>