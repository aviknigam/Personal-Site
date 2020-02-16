<?php
require __DIR__ . '/../core/init.php';

$title = "Avik Nigam | Blog";
$description = "An updated, innovative blog written from the viewpoint myself and occasionally guests.";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include '../includes/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="/dist/css/blog.css?<?= $version; ?>"/>
	</head>
	<body>
		<!-- Navbar -->
			<?php include '../includes/navbar.php'; ?>

		<!-- Content -->
			<div class="container">
				<h1>Blog</h1>
				
				<input type="text" id="searchBox" onKeyUp="blogSearch()" placeholder="Search for articles..">
				<div class="section">
					<?php
						$sql = $conn->query("SELECT * FROM blog ORDER BY postID DESC");
						while ($row = $sql->fetch_assoc()) {
							echo '
								<div id="' .$row['postID']. '" class="index-post">
									<time class="index-date" datetime="' .date('Y-m-d', strtotime($row['postCreated'])). '">
										<span class="index-date-top">' .date('M j', strtotime($row['postCreated'])). '</span>
										<span class="index-date-bottom">' .date('Y', strtotime($row['postCreated'])). '</span>
									</time>
									<div class="blog-post-text">
										<h3 class="index-post-title">
											<a class="" href="/blog/' .$row['postSlug']. '">' .$row['postTitle']. '</a>
										</h3>
										<p class="index-post-desc">' .strip_tags($row['postDescription']). '</p>
									</div>
								</div>
							';
						}
					?>
				</div>
			</div>

		<!-- Footer -->
			<?php include '../includes/footer.php'; ?>

		<!-- Scripts -->
			<?php include '../includes/scripts.php'; ?>
			<script type="text/javascript" src="/dist/js/search.js"></script>
	</body>  
</html>