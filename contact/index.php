<?php
require __DIR__ . '/../core/init.php';

$title = "Avik Nigam | Contact";
$description = "Get in touch. You can contact me via email, phone, twitter or instagram. Contact me to discuss any questions or comments you may have.";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include '../includes/head.php'; ?>
		<style>
			.formal {
				color: #333;
			}
		</style>
	</head>
	<body>
		<!-- Navbar -->
			<?php include '../includes/navbar.php'; ?>

		<!-- Content -->
			<div class="container">
				<h1>Contact</h1>
				<p>Get in touch <i class="fa fa-paper-plane-o fa-fw" aria-hidden="true"></i></p>

				<div class="section">								
					<p>Feel free to contact me on: </p>
						<li><a href="mailto:business.aviknigam@gmail.com" class="formal"><i class="fa fa-envelope-o fa-fw fa-lg"></i> business.aviknigam@gmail.com</a></li>
						<li><a href="tel:+61469358765" class="formal"><i class="fa fa-phone fa-fw fa-lg"></i>+61 469 358 765</a></li>
				</div>

				<div class="section">
					<p>You can also contact me on my social media:</p>
					<p style="text-align: center;">
						<a href="https://instagram.com/aviknigam" target="_blank" id="instagram" class="social-link"><i class="fa fa-instagram fa-fw"></i></a>
						<a href="https://twitter.com/aviknigam" target="_blank" id="twitter" class="social-link"><i class="fa fa-twitter fa-fw"></i></a>
						<a href="https://www.linkedin.com/in/aviknigam" target="_blank" id="linkedin" class="social-link"><i class="fa fa-linkedin fa-fw"></i></a>
					</p>
				</div>
			</div>

		<!-- Footer -->
			<?php include '../includes/footer.php'; ?>
		
		<!-- Scripts -->
			<?php include '../includes/scripts.php'; ?>
	</body>
</html>