<?php
require __DIR__ . '/core/init.php';

$title = "Avik Nigam | Medical Student & Software Developer";
$description = "I'm a medical student, software developer and trader, writing articles for the community in my spare time. Find the latest medical, technology and investing articles as well as top quality resources!";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'includes/head.php'; ?>
	</head>
	<body>
		<!-- Navbar -->
			<?php include 'includes/navbar.php'; ?>
			
		<!-- Content -->
			<div class="container">
				<div class="lead">
					<img class="lead-avatar" src="https://pbs.twimg.com/profile_images/972354873353109505/Yvh29tWe_400x400.jpg" alt="Pic">
					<!-- <img class="lead-avatar" src="<?= instagramGET('Bwgu4s3B2qe'); ?>" alt="Pic"> -->
					<div class="lead-text">
						<h1>Hey, I'm Avik</h1>
						<p>I'm a medical student, software developer and trader, writing <a href="/blog">articles</a> for the community in my spare time.</p>
						<p>Feel free to follow me!</p>
						<p>
							<a href="https://www.youtube.com/channel/UCxmyONr_AGTdodi4sL300-g" target="_blank" id="youtube" class="social-link"><i class="fa fa-youtube-play fa-fw" aria-hidden="true"></i></a>
							<a href="https://instagram.com/aviknigam" target="_blank" id="instagram" class="social-link"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a>
							<a href="https://twitter.com/aviknigam" target="_blank" id="twitter" class="social-link"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
							<a href="https://github.com/aviknigam" target="_blank" id="github" class="social-link"><i class="fa fa-github fa-fw" aria-hidden="true"></i></a>
							<a href="https://www.linkedin.com/in/aviknigam" target="_blank" id="linkedin" class="social-link"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>

				<div class="section">
					<h2 class="index-h2">Updates</h2>
					<div class="index-post">
						<time class="index-date" datetime="2020-02-15">
							<span class="index-date-top">FEB 15</span>
							<span class="index-date-bottom">2020</span>
						</time>
						<div style="line-height: initial;">
							Tutoring available for <b>Bond Psychometric Testing</b> - <a href="/contact">contact me</a>.</li>
						</div>
					</div>
					<div class="index-post">
						<time class="index-date" datetime="2020-02-15">
							<span class="index-date-top">FEB 15</span>
							<span class="index-date-bottom">2020</span>
						</time>
						<div style="line-height: initial;">
							Tutoring available for <b>Medical School Interviews</b> - <a href="/contact">contact me</a>.</li> 
						</div>
					</div>				
				</div>

				<div class="section">
					<h2 class="index-h2">
						Latest Articles
						<a href="/blog" class="view-all">View all</a>
					</h2>
						<?php
							$sql = $conn->query("SELECT * FROM blog ORDER BY postID DESC LIMIT 5");
							while ($row = $sql->fetch_assoc()) {
								echo '
									<div id="' .$row['postID']. '" class="index-post">
										<time class="index-date" datetime="' .date('Y-m-d', strtotime($row['postCreated'])). '">
											<span class="index-date-top">' .date('M j', strtotime($row['postCreated'])). '</span>
											<span class="index-date-bottom">' .date('Y', strtotime($row['postCreated'])). '</span>
										</time>
										<h3 class="index-post-title">
											<a class="" href="/blog/' .$row['postSlug']. '">' .$row['postTitle']. '</a>
										</h3>
											
									</div>
								';
							}
						?>
				</div>

				<div class="section">
					<h2 class="index-h2">
						Most Popular
						<a href="/blog" class="view-all">View all</a>
					</h2>
						<?php
							$sql = $conn->query("SELECT * FROM blog WHERE postID IN (1, 9, 2, 5, 8) ORDER BY FIELD(postID, 1, 9, 2, 5, 8)");
							while ($row = $sql->fetch_assoc()) {
								echo '
									<div id="' .$row['postID']. '" class="index-post">
										<time class="index-date" datetime="' .date('Y-m-d', strtotime($row['postCreated'])). '">
											<span class="index-date-top">' .date('M j', strtotime($row['postCreated'])). '</span>
											<span class="index-date-bottom">' .date('Y', strtotime($row['postCreated'])). '</span>
										</time>
										<h3 class="index-post-title">
											<a class="" href="/blog/' .$row['postSlug']. '">' .$row['postTitle']. '</a>
										</h3>
											
									</div>
								';
							}
						?>
				</div>

			</div>

		<!-- Footer -->
			<?php include 'includes/footer.php'; ?>

		<!-- Scripts -->
			<?php include 'includes/scripts.php'; ?>
	</body>
</html>
