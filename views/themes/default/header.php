<!doctype html>
<html>
	<head>
	  <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<<<<<<< HEAD
		<link rel="stylesheet" href="<?= URL.'public/themes/'.$this->theme_name.'/css/common.css'?>">
=======
		<link rel="stylesheet" href="<?=URL.'public/'.THEMES.$this->theme_name.'/css/common.css'?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>



>>>>>>> 8ddc5fcd4b7613f647bd02880ca0b4d60aca50ad
		<?php
			if(isset($this->js)) {
				foreach ($this->js as $js): ?>
					<script type="text/javascript" src="<?php echo URL.$js?>"></script>
				<?php endforeach;?>
			<?php } ?>

<<<<<<< HEAD
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


=======
>>>>>>> 8ddc5fcd4b7613f647bd02880ca0b4d60aca50ad
		<title>ddddddddd</title>

	</head>
	<body>
	<div id="container">
		<div class="container">
			<nav>
				<div class="mb-menu">

					<a  class="menu-bar" data-toggle="collapse" data-target="#myNavbar">
						<i class="fa fa-bars" aria-hidden="true"></i>
				</a>

				</div>
				<div class="menus">
					<ul class="menu">
						<li><a href="<?=URL; ?>index">Home</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
<<<<<<< HEAD
						<li><a href="<?=URL;?>forum">Forum</a></li>
=======
						<li><a href="<?php echo URL;?>forum">Forum</a></li>
>>>>>>> 8ddc5fcd4b7613f647bd02880ca0b4d60aca50ad
				<?php
					if(isset($_SESSION['logged'])) {
							echo '<li class="float-right"><a class="user" href="user"></li>';
						} else {
							echo '<li class="float-right"><a class="login" href="login"></a></li>';
						}
				?>
					</ul>
				</div>
			</nav>
			<div class="navigation-menu">
						<ul>
							<li><a href="">Menu1</a></li>
							<li><a href="">Menu1</a></li>
							<li><a href="">Menu1</a></li>
							<li><a href="">Menu1</a></li>
						</ul>
			</div>

				<div class="page">



						<script type="text/javascript">
							$(".menu-bar").click(function(){
								$(".navigation-menu").toggleClass("menu-open");
								$("body").toggleClass("body-right");
								$(".menu-bar").toggleClass("menubar-right");
							});
						</script>
