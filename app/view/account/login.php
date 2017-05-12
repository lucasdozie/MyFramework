<section>

	<p><a href="<?= config::get('Home_url'); ?>account/facebookLogin">Login with Facebook</p>
	<div>
		<!-- Facebook login -->
	</div>

	<form action="<?php echo $this->action; ?>" method="POST">
		<div class="feild_box">
			<label>Username or Email</label>
			<input type="text" name="username">
		</div>
		<div class="feild_box">
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<input type="submit" name="submit" value="login">
	</form>
	<p>I don't have an account, <a href="<?php echo $this->register; ?>">register here</a></p>

	Welcome <?php //echo $username ? $this->username : 'John Doe';?>
</section>