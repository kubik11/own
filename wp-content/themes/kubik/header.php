<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title><?php wp_title(); ?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="path/to/image.jpg">
	
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700&amp;subset=cyrillic" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500" rel="stylesheet">  -->
	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<?php wp_head(); ?>
</head>

<body>

	<header>
		<div class="container">
		<a href="#" class="gunters-logo">Gunter's</a>
		
		<div class="header-caption">
			<button class="hamburger hamburger--squeeze" type="button">
			<span class="hamburger-box">
			  <span class="hamburger-inner"></span>
			</span>
			</button>
			<span>Story</span>
		</div>
		</div>
		<nav class="navigation">
			<ul>
				<!-- <li><a href="#">event's</a></li>
				<li><a href="#">gallery</a></li>
				<li><a href="#">history</a></li>
				<li><a href="#">about</a></li> -->
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' 

				)); ?> 
			</ul>
		</nav>
	</header>