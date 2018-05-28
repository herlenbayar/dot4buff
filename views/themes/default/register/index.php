
<div class="login-form">
	<form action="register/create" method="POST">
		<div class="title text-center">Register</div>
		 <div class="form-group">
			<input class="form-control" type="text" name="username" placeholder="Username" >
		</div>	
		 <div class="form-group">
			<input class="form-control" type="password" name="password" placeholder="Password" >
		</div>
		<div class="inf">
		<span>Remember me</span>
		<span class="float-right color-primary forget"><a>Forgot?</a></span>	
		</div>
		<button class="btn btn-primary btn-block" type="submit">Register</button>
		<a href="<?php echo URL.'login'; ?>" class="btn btn-primary btn-block register-btn">Login</a>
	
	</form>
</div>
