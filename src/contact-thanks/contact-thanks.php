<?php
// I use session for passing variables between modules
session_start();
$session = $_SESSION['POST'];
unset($_SESSION['POST']);
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	<title>Основи WEB-програмування - Thank you!</title>
	<link rel="stylesheet" href="../index.css" />
	<link rel="stylesheet" href="./contact-thanks.css" />
	<link rel="stylesheet" href="./contact-thanks-responsive.css" />
</head>

<body>
	<header>
		<img id="home-logo" src="../../assets/code.svg" />
		<nav>
			<a href="../index.php" class="nav-text">Home</a>
			<a href="../about/about.html" class="nav-text">About</a>
			<a href="../contact/contact.php" id="focused" class="nav-text">Contact</a>
		</nav>
	</header>

	<main>
		<div id="wrapper">
			<h1 class="simple-text-heading ">Thank you for your comment!</h1>
			<!-- <p class="simple-text">You submitted the form with the following info:</p> -->
			<?php
			echo "<div id=\"submitted-info\">
					<p id=\"submitted-name\">
						<span class=\"simple-text-heading\">Name:</span>
						<span class=\"simple-text\">{$session['user-name']}</span>
					</p>
					<p id=\"submitted-email\">
						<span class=\"simple-text-heading\">Email:</span>
						<span class=\"simple-text\">{$session['user-email']}</span>
					</p>
					<p id=\"submitted-title\">
					   <span class=\"simple-text-heading\">Title:</span>
					   <span class=\"simple-text\">{$session['user-title']}</span>
				  	</p>
				    <p id=\"submitted-comment\">
						<span class=\"simple-text-heading\">Comment:</span>
						<span class=\"simple-text\">{$session['user-comment']}</span>
			 	    </p>
				</div>"
			?>
			<button class="green-button" id="back-home-button">
				<a href="../../src/index.php">Back home</a>
			</button>
		</div>
	</main>

	<footer>
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
	<!-- <script src="./contact.js"></script> -->
</body>

</html>