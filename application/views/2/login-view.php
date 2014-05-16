<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php asset_url(); ?>css/vendor/normalize.css">
	<link rel="stylesheet" href="<?php asset_url(); ?>css/vendor/foundation.min.css">
	<link rel="stylesheet" href="<?php asset_url(); ?>css/main.css">

	<script src="<?php asset_url(); ?>js/vendor/modernizr.js"></script>
	<script src="<?php asset_url(); ?>js/main.js"></script>
</head>
<body>
	<div class="contain-to-grid">
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name">
					<h1><a href="#">Site Name</a></h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<!-- Right Nav Section -->
				<ul class="right">
					<li class="active"><a href="#">Menu Option</a></li>
					<li><a href="#">Menu Item</a></li>
					<li><a href="#">Another Item</a></li>
				</ul>
			</section>
		</nav>
	</div>
	<div class="row">
		<div class="columns">
			<h1>Usuarios</h1>
			



		</div>
	</div>


	<div id="sign-in-modal" class=" small">
	<form id="login-form">
		<div class="row">
			<div class="large-12 columns">
				<label>Email:</label>
				<input type="text" name="login_email" class="login-email" >
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>Password:</label>
				<input type="password" name="login_pass" class="login-pass">
			</div>
		</div>
			<div class="row">
				<div class="large-12 columns">
					<p class="error"><small class="error">Error</small></p>
				</div>
			</div>
		<div class="row">
			<div class="large-12 columns">
				<p class="text-right"><small><a href="#" data-reveal-id="register-modal">Not registered?</a></small></p>
				<a class="button last-button expand login-button">Sign in</a>
				
			</div>			
		</div>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php asset_url(); ?>js/vendor/jquery.js"><\/script>')</script>
    <script src="<?php asset_url(); ?>js/vendor/foundation.min.js"></script>
    <script src="<?php asset_url(); ?>js/vendor/foundation.topbar.js"></script>
    <script src="<?php asset_url(); ?>js/vendor/foundation.dropdown.js"></script>
    <script>$(document).foundation();</script>
    <script src="<?php asset_url(); ?>js/main.js"></script>

</body>
</html>