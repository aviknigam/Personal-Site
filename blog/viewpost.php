<?php
require __DIR__ .'/../core/init.php';

$urlSlug = sanitize($_GET['slug']);

$stmt = $conn->prepare('SELECT * FROM blog WHERE postSlug = ?');
$stmt->bind_param("s", $postSlug);
$postSlug = $urlSlug;
$stmt->execute();

$result = $stmt->get_result();

if(!$result->num_rows > 0) {
	header("Location: /404");
	exit;
}

// ------------ IF THERE IS A POST --------------------------

while ($row = $result->fetch_assoc()) {
	$postID = $row['postID'];
	$postTitle = $row['postTitle'];
	$postDescription = $row['postDescription'];
	$postContent = $row['postContent'];
	$writerID = $row['writerID'];
	$postCreated = $row['postCreated'];

	$stmt = $conn->query("SELECT * FROM writers LEFT JOIN blog ON writers.writerID = blog.writerID WHERE blog.writerID = $writerID");
	while ($row = $stmt->fetch_assoc()) {
		$writerName = $row['writerName'];
		$writerAbout = $row['writerAbout'];
		$writerTwitter = $row['writerTwitter'];
		$writerInstagram = $row['writerInstagram'];
		$writerImage = $row['writerImage'];
	}
}

// Variable declaration for head include
$title = strip_tags($postTitle);
$description = strip_tags($postDescription);

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
				<!-- Breadcrumb -->
					<div class="breadcrumb">
						<a href="/">Home</a> / <a href="/blog">Blog</a> / <a href="/blog/<?=$urlSlug; ?>"><?= $postTitle; ?></a>
					</div>

				<!-- Post Details -->
					<div class="section">
						<h1 class="post-title"><?= $postTitle; ?></h1>
							<div class="post-details">
								<span>by <?= $writerName; ?></span><span class="separator"> | </span><time class="date" datetime="<?= date('Y-m-d', strtotime($postCreated)); ?>"><?= date('F j, Y', strtotime($postCreated)); ?></time>
							</div>
					</div>									

				<!-- Main Post -->
					<div class="section">
						<div class="main-post">
							<?php
								$postAd_get = file_get_contents('../includes/ads-responsive.php');
								$main_post = htmlspecialchars_decode(str_replace("postAd", $postAd_get, $postContent));
								echo $main_post;
							?>
						</div>
						<p class="post-footer">
							<span>If you have any questions or comments, make sure to <a href="/contact">contact me</a>.</span>
						</p>
					</div>

				<!-- About -->
					<div class="section">
						<div class="about">
							<img src="<?= $writerImage; ?>" alt="Picture of <?= $writerName; ?>!">
							<h2><?= $writerName; ?></h2>
							<a href="<?= $writerTwitter; ?>" id="twitter" class="social-link" target="_blank"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
							<a href="<?= $writerInstagram; ?>" id="instagram" class="social-link" target="_blank"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a>
							<div class="bio">
								<?= $writerAbout; ?>
							</div>
						</div>
					</div>
						
				<!-- Post Navigation -->
					<div class="section">
						<div class="post-nav">
							<?php
								$stmt = $conn->query("SELECT * FROM blog WHERE postID < $postID ORDER BY postID DESC LIMIT 1");
								$row = $stmt->fetch_assoc();
									$previous_postSlug = $row['postSlug'];

								$stmt = $conn->query("SELECT * FROM blog WHERE postID > $postID ORDER BY postID LIMIT 1");
								$row = $stmt->fetch_assoc();
									$next_postSlug = $row['postSlug'];
							?>
							<a class="hover-none" href="/blog/<?= $previous_postSlug; ?>">
								<span class="text-black"><i class="fa fa-chevron-left chev-margin"></i>Previous Post</span>
							</a>
							<a class="hover-none text-right" href="/blog/<?= $next_postSlug; ?>">
								<span class="text-black"><i class="fa fa-chevron-right chev-margin"></i>Next Post</span>
							</a>
						</div>
					</div>
						
				<!-- Recent Posts -->
					<div class="section">
							<hr>
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
			</div>

		<!-- Footer -->
			<?php include '../includes/footer.php'; ?>

		<!-- Scripts -->
			<?php include '../includes/scripts.php'; ?>
			
	</body>
</html>
