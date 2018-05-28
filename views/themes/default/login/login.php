
<div class="login-form">
	<form action="login/run" method="POST">
		<div class="title text-center">LOGIN</div>
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
		<button class="btn btn-primary btn-block" type="submit">Login</button>
		<a href="<?php echo URL.'register'; ?>" class="btn btn-primary btn-block btn register-btn">Register</a>
	</form>
</div>
