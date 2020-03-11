<?php
require __DIR__ . '/../core/init.php';

$title = "Avik Nigam | About";
$description = "I am current a medical student, software developer and trader. Check out my articles and top quality resources!";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include '../includes/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="/dist/css/responsive.css?<?= time(); ?>"/>

		<style>
			.lead-avatar {
				display: block;
				margin: auto;
			}
		</style>
	</head>
	<body>
		<!-- Navbar -->
			<?php include '../includes/navbar.php'; ?>

		<!-- Content -->
			<div class="container">
				<h1>About</h1>

				<div class="section">
					<img class="lead-avatar" src="https://pbs.twimg.com/profile_images/972354873353109505/Yvh29tWe_400x400.jpg" alt="Pic">
				</div>

				<div class="section">
					<p>I'm Avik. I am currently a 3rd year medical student studying at Bond University, located in Gold Coast, Australia.</p>
					<p>I am also a software developer, making cool stuff in my spare time, check out my GitHub for a full list of my projects.</p>

					<p>Make sure to follow me on my journey on other platforms below!</p>
				</div>
				
				<div class="section">
					<p style="text-align: center">
							<a href="https://www.youtube.com/channel/UCxmyONr_AGTdodi4sL300-g" target="_blank" id="youtube" class="social-link"><i class="fa fa-youtube-play fa-fw" aria-hidden="true"></i></a>
							<a href="https://instagram.com/aviknigam" target="_blank" id="instagram" class="social-link"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a>
							<a href="https://twitter.com/aviknigam" target="_blank" id="twitter" class="social-link"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
							<a href="https://github.com/aviknigam" target="_blank" id="github" class="social-link"><i class="fa fa-github fa-fw" aria-hidden="true"></i></a>
							<a href="https://www.linkedin.com/in/aviknigam" target="_blank" id="linkedin" class="social-link"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
					</p>
				</div>
			</div>

		<!-- Footer -->
			<?php include '../includes/footer.php'; ?>

		<!-- Scripts -->
			<?php include '../includes/scripts.php'; ?>
	</body>
</html>