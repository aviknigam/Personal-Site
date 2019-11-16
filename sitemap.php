<?php
require __DIR__ . '/core/init.php';

header('Content-type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xhtml="http://www.w3.org/1999/xhtml" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

    echo '
    <url>
        <loc>https://aviknigam.com</loc>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>';

    echo '
    <url>
        <loc>https://aviknigam.com/about/</loc>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>';
    
    echo '
    <url>
        <loc>https://aviknigam.com/contact/</loc>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>';

    echo '
    <url>
        <loc>https://aviknigam.com/blog/</loc>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>';
    
    // echo '
    // <url>
    //     <loc>https://aviknigam.com/cases/</loc>
    //     <changefreq>weekly</changefreq>
    //     <priority>0.80</priority>
    // </url>';

    // BLOG POSTS
    $sql = $conn->query('SELECT * FROM blog ORDER BY postID desc');
    while($row = $sql->fetch_assoc()) {
        $postSlug = $row['postSlug'];
        echo "
        <url>
            <loc>https://aviknigam.com/blog/$postSlug</loc>
            <changefreq>weekly</changefreq>
            <priority>0.60</priority>
        </url>"
        ;
    }

echo '</urlset>';
?>