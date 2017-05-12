<section>
	<form action="<?php echo $this->register; ?>" method="POST">
		<div class="field_box">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="field_box">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="field_box">
			<label>Telephone</label>
			<input type="text" name="telephone">
		</div>
		<div class="field_box">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="field_box">
			<label>Re-enter Password</label>
			<input type="Password" name="reEnter_Password">
		</div>
		<input type="submit" name="submit" value="login">
	</form>
	<p>I already have an account, <a href="/register">login here</a></p>
</section>