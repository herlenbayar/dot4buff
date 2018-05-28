<!doctype html>
<html>
	<head>
	  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo URL; ?>views/admin/assets/css/common.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
		<title>admin</title>
	</head>
	<body>
<div id="sidebar" class="side-bar">
<nav class="navigation">
	<div class="tab-profile">

	</div>
	<ul class="menu">
		<li><a>menu</a><i class="fa fa-chevron-down" aria-hidden="true"></i></li>
		<li><a>menu</a><i class="fa fa-chevron-down" aria-hidden="true"></i></li>
		<li><a>menu</a><i class="fa fa-chevron-down" aria-hidden="true"></i></li>
		<li><a>menu</a><i class="fa fa-chevron-down" aria-hidden="true"></i></li>
		<li><a>menu</a><i class="fa fa-chevron-down" aria-hidden="true"></i></li>
		<li><a>menu</a><i class="fa fa-chevron-down" aria-hidden="true"></i></li>
		<li><a>menu</a><i class="fa fa-chevron-down" aria-hidden="true"></i></li>
		<li><a>menu</a><i class="fa fa-chevron-down" aria-hidden="true"></i></li>
	</ul>
</nav>
</div>
<div id="main" class="main">
<nav class="main-menu">

		<a id="btn-toggle" class="tab-bar"><i class="fa fa-bars" aria-hidden="true"></i></a>

        <div class="profile float-right">

            <i class="fa fa-envelope" aria-hidden="true">
                <span class="badge badge-light badge-msg">4</span>
            </i>

            <img class="profile-img" />
            <div class="user-menu">
                <li class="name">name<i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <ul>
                        <li><a>profile</a></li>
                        <li><a>pro</a></li>
                        <li><a>pro</a></li>
                        <li><a href="<?php echo URL; ?>admin/logout">logout</a></li>
                    </ul>
                </li>
            </div>

        </div>


</nav>


<script>

	$(document).ready(function(){

        var side_bar = document.getElementById('sidebar');
		var main = document.getElementById('main');
		var side_bar_width = $(side_bar).width();
		var side_bar_minus = side_bar_width * -1;
		var zero_px = '0px';

		$(main).css({
            'margin-left': side_bar_width,
            'padding-right': side_bar_width
        });

		var menu_toggle = document.getElementById('btn-toggle');

    var click = 1;

        $(menu_toggle).click(function() {

            if(click == 1){
                click = 0;
                $(side_bar).css('margin-left', side_bar_minus);
                $(main).css({
                    'margin-left': zero_px,
                    'padding-right': zero_px,
                    'transition': '0.5s'});

            } else {
                click = 1;
                $(side_bar).css('margin-left', zero_px);
                $(main).css({
                    'margin-left': side_bar_width,
                    'padding-right': side_bar_width,
                    'transition': '0.5s'
                });
            }
        });
	});
</script>
