<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	<title>Основи WEB-програмування - Project</title>
	<link rel="stylesheet" href="../index.css" />
	<link rel="stylesheet" href="./project.css" />
	<link rel="stylesheet" href="./project-responsive.css" />
</head>

<body>
	<header>
		<img id="home-logo" src="../../assets/code.svg" />
		<nav>
			<a href="../index.php" class="nav-text">Home</a>
			<a href="../about/about.html" class="nav-text">About</a>
			<a href="../contact/contact.php" class="nav-text">Contact</a>
		</nav>
	</header>

	<main>
		<section id="project-wrapper">
			<div id="project-info">
				<div id="text-wrapper">

					<?php
					// Get the content of the JSON file
					$json = file_get_contents('../../projects.json');
					// decode the JSON into an associative array
					$decoded = json_decode($json, true);

					$projectIndex = $_GET['index'];
					$projectInfo = $decoded['projects'][$projectIndex];
					?>

					<h2 class="heading heading-black">
						<?= $projectInfo['title'] ?>
					</h2>
					<p id="project-info-summary" class="simple-text">
						<?= $projectInfo['description'] ?>
					</p>
				</div>
				<div id="project-info-details">
					<p class="project-info-details-row simple-text">
						<span class="simple-text-heading">Client:</span>
						<span>
							<a href="">
								<?= $projectInfo['client'] ?>
							</a>
						</span>
					</p>
					<p class="project-info-details-row simple-text">
						<span class="simple-text-heading">Date:</span>
						<span><?= $projectInfo['date'] ?></span>
					</p>
					<p class="contact-info-contacts-row simple-text">
						<span class="simple-text-heading">Share:</span>
						<span>
							<a href="">Facebook</a>, <a href="">Twitter</a>,
							<a href="">Pinterest</a>
						</span>
					</p>
				</div>
			</div>
			<div id="project-image">
				<img src=<?= $projectInfo['img'] ?>>
			</div>
		</section>

		<section id="project-navigation">
			<a id="link-previous">
				<img src="../../assets/left-arrow.svg" />
				<span class="navigation-text">previous project</span>
			</a>
			<img id="project-navigation-center-img" src="../../assets/code.svg" />
			<a id="link-next">
				<span class="navigation-text">next project</span>
				<img src="../../assets/right-arrow.svg" />
			</a>
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
	<script src="./project.js"></script>
</body>

</html>