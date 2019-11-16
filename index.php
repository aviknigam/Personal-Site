<?php
require __DIR__ . '/core/init.php';

$title = "Avik Nigam | Medical Student & Software Developer";
$description = "Find the latest medical, technology and investing articles as well as top quality resources!";


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <!-- Content -->
            <div class="container">
                <div class="home-wrap">
                    <div class="row d-flex">
                        <div class="col-lg-6 px-lg-5 order-1 order-lg-0">
                            <h1>Avik Nigam</h1>
                            <h2>Medical Student &amp; Software Developer based in Gold Coast, Australia</h2>
                            <p>Currently I am a full time medical student with a passion for building interesting projects as a hobby.</p>
                            <p>With 5+ years of experience programming in Python, PHP, SQL, I am skilled at writing functional code.</p>
                            <p>In fact, my profile image was fetched using a script! You can find a list of my projects over at my GitHub linked below.</p>
                            <p>I also like to write medical, technology and investing articles. <a href="/blog">Check out my blog </a></p>
                            
                            <p><strong>Interested in working together?</strong></p>
                            <div class="home-wrap-footer">
                                <a href="mailto:business.aviknigam@gmail.com" class="btn btn-dark">Get in touch</a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1 d-flex justify-content-start mb-4">
                            <img class="home-wrap-img" src="<?= instagramGET('Bwgu4s3B2qe'); ?>" alt="Picture of Avik Nigam">
                        </div>
                    </div>
                    <div class="row mt-5 d-flex justify-content-center">
                        <a href="https://instagram.com/aviknigam" target="_blank" id="instagram" class="social-link"><i class="fa fa-instagram fa-fw fa-2x" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/aviknigam" target="_blank" id="twitter" class="social-link"><i class="fa fa-twitter fa-fw fa-2x" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCxmyONr_AGTdodi4sL300-g" target="_blank" id="youtube" class="social-link"><i class="fa fa-youtube-play fa-fw fa-2x" aria-hidden="true"></i></a>
                        <a href="https://github.com/aviknigam" target="_blank" id="github" class="social-link"><i class="fa fa-github fa-fw fa-2x" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/aviknigam" target="_blank" id="linkedin" class="social-link"><i class="fa fa-linkedin fa-fw fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

		<!-- Footer -->
			<?php include 'includes/footer.php'; ?>

        <!-- Scripts -->
            <?php include 'includes/scripts.php'; ?>
    </body>
</html>
