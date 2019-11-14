<?php
include "./contact-validate.php";
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	<title>Основи WEB-програмування - Contact</title>
	<link rel="stylesheet" href="../index.css" />
	<link rel="stylesheet" href="./contact.css" />
	<link rel="stylesheet" href="./contact-responsive.css" />
</head>

<body>
	<header>
		<img id="home-logo" src="../../assets/code.svg" />
		<nav>
			<a href="../index.php" class="nav-text">Home</a>
			<a href="../about/about.html" class="nav-text">About</a>
			<a href="./contact.php" id="focused" class="nav-text">Contact</a>
		</nav>
	</header>

	<main>
		<?php
		include "../../env.php";
		?>
		<div id="contact-wrapper">
			<section id="contact-info">
				<h2 class="heading heading-black">Contact Info:</h2>
				<p id="contact-info-summary" class="simple-text">
					To give give beginning divide, cattle. Give moving won't, there the
					abundantly she'd she'd brought air upon. Light hath subdue. Life
					days creature upon first heaven gathering dry.
				</p>
				<div id="contact-info-contacts">
					<p class="contact-info-contacts-row simple-text">
						<span class="simple-text-heading">Address:</span>
						<span>
							<a href="http://maps.google.com/?q=10111 Santa Monica Boulevard, LA">
								10111 Santa Monica Boulevard, LA
							</a>
						</span>
					</p>
					<p class="contact-info-contacts-row simple-text">
						<span class="simple-text-heading">Phone:</span>
						<span><a href="callto:+44 987 065 908">+44 987 065 908</a></span>
					</p>
					<p class="contact-info-contacts-row simple-text">
						<span class="simple-text-heading">Email:</span>
						<span><a href="mailto:info@Example.com">info@Example.com</a></span>
					</p>
					<p class="contact-info-contacts-row simple-text">
						<span class="simple-text-heading">Telegram:</span>
						<span><a href="https://t.me/heyiamvika">@heyiamvika</a></span>
					</p>
				</div>
			</section>
			<section id="contact-form">
				<form name="send-message-form" method="post" action="">
					<input type="text" class="input-short simple-text <?= $nameValid ? "" : invalid ?>" name="user-name" placeholder="Your Name" value="<?= $name ?>" required />
					<input type="email" class="input-short simple-text <?= $emailValid ? "" : invalid ?>" name="user-email" placeholder="Your Email" value="<?= $email ?>" required />
					<input type="text" name="user-title" placeholder="Your Title" class="simple-text <?= $titleValid ? "" : invalid ?>" value="<?= $title ?>" required />
					<textarea name="user-comment" placeholder="Your Comment" class="simple-text <?= $commentValid ? "" : invalid ?>" required><?= $comment ?></textarea>
					<button type="submit" class="green-button" id="submit-button">send message
					</button>
				</form>
			</section>
		</div>
		<section id="contact-map">
			<div id="google-map">
				<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ0f2g9vDO1EARuzkLWkmmlMU&key=<?= getenv('GOOGLE_API') ?>" allowfullscreen></iframe>
			</div>
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
	<!-- <script src="./contact.js"></script> -->
</body>

</html>