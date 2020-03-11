<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title><?= $title; ?></title>
		<meta name="description" content="<?= $description; ?>">
        <meta name="author" content="Avik Nigam">
        
        <!-- Favicon -->
            <link rel="apple-touch-icon" sizes="76x76" href="/dist/img/favicon/apple-touch-icon.png?v=kP3PQWanJ4">
            <link rel="icon" type="image/png" sizes="32x32" href="/dist/img/favicon/favicon-32x32.png?v=kP3PQWanJ4">
            <link rel="icon" type="image/png" sizes="16x16" href="/dist/img/favicon/favicon-16x16.png?v=kP3PQWanJ4">
            <link rel="manifest" href="/dist/img/favicon/site.webmanifest?v=kP3PQWanJ4">
            <link rel="mask-icon" href="/dist/img/favicon/safari-pinned-tab.svg?v=kP3PQWanJ4" color="#5bbad5">
            <link rel="shortcut icon" href="/dist/img/favicon/favicon.ico?v=kP3PQWanJ4">
            <meta name="apple-mobile-web-app-title" content="Avik Nigam">
            <meta name="application-name" content="Avik Nigam">
            <meta name="msapplication-TileColor" content="#2d89ef">
            <meta name="msapplication-config" content="/dist/img/favicon/browserconfig.xml?v=kP3PQWanJ4">
            <meta name="theme-color" content="#ffffff">

        <!-- Global site tag (gtag.js) - Google Analytics -->
            <?php
                if ($googleAnalytics == 1) {
                    include 'head.analytics.php';
                };
            ?>

		<!-- Facebook -->
            <meta property="og:title" content="<?= $title ?>">
            <meta property="og:type" content="website">
            <meta property="og:url" content="<?= $configURL; ?>">
            <meta property="og:image" content="<?= $configURL; ?>/dist/img/og.jpg">
            <meta property="og:description" content="<?= $description; ?>">
		
		<!-- Twitter -->
            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@aviknigam">
            <meta name="twitter:creator" content="@aviknigam">
            <meta name="twitter:title" content="<?= $title; ?>">
            <meta name="twitter:description" content="<?= $description; ?>">
            <meta name="twitter:image" content="<?= $configURL; ?>/dist/img/favicon/android-chrome-256x256.jpg">
        
        <!-- Normalize Reset -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <!-- Font Awesome -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
			<link rel="stylesheet" type="text/css" href="/dist/css/app.css?<?= $version; ?>">
        <!-- Responsive CSS -->
            <link rel="stylesheet" type="text/css" href="/dist/css/responsive.css?<?= $version; ?>"/>
