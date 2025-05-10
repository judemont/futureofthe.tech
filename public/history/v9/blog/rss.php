<?php

$data = json_decode(file_get_contents('infos.json'), true);

$siteTitle = $data['name'];
$siteLink = $data['url']; 
$siteDescription = $data['description'] ?? '';

$articlesDir = 'articles/';
$files = glob($articlesDir . '*.md');

$rssContent = '<?xml version="1.0" encoding="UTF-8"?>';
$rssContent .= '<rss version="2.0">';
$rssContent .= '<channel>';
$rssContent .= '<title>' . htmlspecialchars($siteTitle) . '</title>';
$rssContent .= '<link>' . htmlspecialchars($siteLink) . '</link>';
$rssContent .= '<description>' . htmlspecialchars($siteDescription) . '</description>';
$rssContent .= '<language>en-us</language>';

foreach ($files as $file) {
    $content = file_get_contents($file);

    preg_match('/\[info_title\]: (.+)/', $content, $titleMatch);
    preg_match('/\[info_description\]: (.+)/', $content, $descMatch);
    preg_match('/\[info_date\]: (.+)/', $content, $dateMatch);

    $title = $titleMatch[1] ?? 'Untitled';
    $desc = $descMatch[1] ?? '';
    $date = $dateMatch[1];
    $filename = basename($file);
    $link = $siteLink . '/read.php?p=' . urlencode($filename);

    $rssContent .= '<item>';
    $rssContent .= '<title>' . htmlspecialchars($title) . '</title>';
    $rssContent .= '<link>' . htmlspecialchars($link) . '</link>';
    $rssContent .= '<pubDate>' . $date . '</pubDate>';
    $rssContent .= '<description>' . htmlspecialchars($desc) . '</description>';
    $rssContent .= '<guid>' . htmlspecialchars($link) . '</guid>';
    $rssContent .= '</item>';
}

$rssContent .= '</channel>';
$rssContent .= '</rss>';

file_put_contents('articles.xml', $rssContent);

