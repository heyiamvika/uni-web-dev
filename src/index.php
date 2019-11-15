<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	<title>Основи WEB-програмування - Home</title>
	<link rel="stylesheet" href="./index.css" />
	<link rel="stylesheet" href="home/home.css" />
	<link rel="stylesheet" href="home/home-responsive.css" />
</head>

<body>
	<header>
		<img id="home-logo" src="../assets/code.svg" />
		<nav>
			<a href="./index.html" id="focused" class="nav-text">Home</a>
			<a href="./about/about.html" class="nav-text">About</a>
			<a href="./contact/contact.php" class="nav-text">Contact</a>
		</nav>
	</header>

	<main>
		<section id="home-head">
			<h1 class="heading heading-black">Viktoriia Nosova</h1>
			<p class="simple-text">I am a Frontend Developer based in Kyiv, specializing in JavaScript
				and Interfaces Development.</p>
		</section>

		<section id="home-grid">
			<!-- Elements are insersted dynamically, through PHP. -->
			<?php include './home/home.php'; ?>
		</section>
	</main>

	<footer>
		<!-- <div id="footer-credentials" class="footer-box"> -->
		<!-- There was a conflict in mobile version, since id is stronger in CSS inheritance -->
		<div class="footer-box footer-credentials">
			<h2 id="company-name">Vika Nosova, Inc.</h2>
			<p>
				Icons made by
				<a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a>
				from
				<a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
			</p>
		</div>
		<div class="footer-box footer-contacts">
			<p id="footer-contacts-mail"><a href="mailto:@viktoriianosova@hotmail.com">viktoriianosova@hotmail.com</a></p>
			<p id="footer-contacts-phone"><a href="tel: +380959105046">+380959105046</a></p>
		</div>
		<div class="footer-box footer-sitemap">
			<ul>
				<div class="group">
					<li><a>Projects</a></li>
					<li><a>About</a></li>
					<li><a>Services</a></li>
					<li><a>Carreer</a></li>
				</div>
				<div class="group">
					<li><a>News</a></li>
					<li><a>Events</a></li>
					<li><a>Contact</a></li>
					<li><a>Legals</a></li>
				</div>
				<div class="group">
					<li><a>Facebook</a></li>
					<li><a>Twitter</a></li>
					<li><a>Instagram</a></li>
					<li><a>Dribbble</a></li>
				</div>
			</ul>
		</div>
	</footer>

	<script src="home/home.js"></script>
</body>

</html>