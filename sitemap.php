<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/xml; charset=UTF-8');

$base = rtrim(BASE_URL, '/');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$weeklyPages = ['', 'home', 'career', 'industries', 'portfolio', 'testimonials'];

foreach ($sitemap_urls as $path) {
    $loc = ($path === '' || $path === 'home') ? $base : $base . '/' . $path;

    // Detect actual file modification time for Googlebot
    $filePath = ($path === '' || $path === 'home') ? __DIR__ . '/index.php' : __DIR__ . '/' . $path . '/index.php';
    if (is_file($filePath)) {
        $lastmod = date('Y-m-d', filemtime($filePath));
    } else {
        $lastmod = date('Y-m-d');
    }

    // Set changefreq & priority according to user requirements & SEO best practices
    if (in_array($path, $weeklyPages, true)) {
        $changefreq = 'weekly';
        if ($path === '' || $path === 'home') {
            $priority = '1.0';
        } elseif ($path === 'portfolio') {
            $priority = '0.9';
        } else {
            $priority = '0.8';
        }
    } else {
        $changefreq = 'monthly';
        $priority = (strpos($path, '/') !== false) ? '0.7' : '0.8';
    }

    echo "  <url>\n";
    echo '    <loc>' . htmlspecialchars($loc, ENT_XML1) . "</loc>\n";
    echo "    <lastmod>{$lastmod}</lastmod>\n";
    echo "    <changefreq>{$changefreq}</changefreq>\n";
    echo "    <priority>{$priority}</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';

